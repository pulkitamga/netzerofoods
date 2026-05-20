<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;

class VerificationController extends Controller
{
    public function sendVerificationEmail(Request $request)
    {
        // Validate the email address
        $request->validate([
            'email' => 'required|email',
        ]);

        // Generate a verification code
        $verificationCode = rand(100000, 999999);

        // Store the verification code in the session
        $request->session()->put('verification_code', $verificationCode);

        // Send the verification email
        Mail::to($request->input('email'))->send(new VerificationEmail($verificationCode));
       
        return response()->json(['message' => 'Verification email sent'], 200);
    }

    public function verifyCode(Request $request)
    {
        // Validate the input
        $request->validate([
            'verification_code' => 'required|integer',
        ]);

        // Retrieve the stored code from the session
        $storedCode = $request->session()->get('verification_code');

        // Verify the code
        if ($request->input('verification_code') == $storedCode) {
            return response()->json(['message' => 'Verification successful']);
        } else {
            return response()->json(['message' => 'Invalid code'], 400);
        }
    }
}