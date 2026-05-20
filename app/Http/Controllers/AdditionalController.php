<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    public function saveAdditionalData(Request $request)
    {
        $user = User::find(auth()->id());

        $additionalData = $user->additional_data ?? [];

        $additionalData['experience_with_market_spaces'] = $request->experience_with_market_spaces;
        $additionalData['sustainability_practices'] = $request->sustainability_practices;

        $user->additional_data = $additionalData;
        $user->save();

        return response()->json(['success' => true]);
    }
}