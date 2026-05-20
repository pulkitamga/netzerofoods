<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; // Add this line
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use App\Mail\ApplicationDataMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; // Add this line

class UserController extends Controller
{
   /**
     * Save user details and send a verification email.
     */
    
    public function saveUserDetails(Request $request)
    {
        try {
            $data = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'post_code' => 'required|string|max:255',
                'contact_number' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'full_address' => 'nullable|string|max:255',
                'password' => 'nullable|string|min:4|confirmed',

            ]);

            // Generate verification code
            $verificationCode = rand(100000, 999999);

            // Save user details
            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'post_code' => $data['post_code'],
                'contact_number' => $data['contact_number'],
                'email' => $data['email'],
                'verification_code' => $verificationCode,
                'full_address' => $data['full_address'],
                'password' => Hash::make($data['post_code']),
            ]);

            // Send email with verification code
            Mail::send('emails.verify', ['code' => $verificationCode], function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Net Zero Market Signup Verification');
            });

            return response()->json(['message' => 'User registered and verification email sent.'], 200);
        } catch (\Exception $e) {
            \Log::error('Error saving user details: ' . $e->getMessage());
            return response()->json(['message' => 'Error in sign up process.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Verify the email with the provided verification code.
     */
    public function verifyEmail(Request $request)
    {
        try {
            $data = $request->validate([
                'email' => 'required|string|email',
                'verification_code' => 'required|numeric',
            ]);

            // Find user by email
            $user = User::where('email', $data['email'])->first();

            if ($user && $user->verification_code == $data['verification_code']) {
                // Verification successful, proceed to next step
                $user->email_verified_at = now();
                $user->verification_code = null; // Clear the verification code
                $user->save();

                return response()->json(['message' => 'Email verified successfully'], 200);
            } else {
                return response()->json(['message' => 'Invalid verification code'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error in verifying email', 'error' => $e->getMessage()], 500);
        }
    }

    /*Save Additional Data*/
    public function saveAdditionalData(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'formData' => 'required|json',
        ]);

        // Decode the JSON data
        $formData = json_decode($request->input('formData'), true);
        $email = $formData['email'];
        // Find the user by email
        $user = User::where('email',$email)->first();
        if ($user) {
            $user->application_data = $formData;
            $user->save();
            
            // Send the email
            Mail::to($email)->send(new ApplicationDataMail($formData)); //To send Admin
            Mail::to($email)->send(new ApplicationDataMail($formData)); //To send User

            //Mail::to('gausgulam4@gmail.com')->send(new ApplicationDataMail($formData)); //To send Test Admin

            return response()->json(['message' => 'You have sign up succesfully.'], 200);
        } else {
            return response()->json(['message' => 'Something Wrong, Please try again!'], 404);
        }
    }


}