<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            return redirect()->route('auth.loginpage')->with('success', 'Email verified successfully');
        }
        return redirect()->route('reverify.email')->with('error', 'Invalid verification token. Please verify your email to activate your account.');
    }

    /**Need to load reverify email form */
    public function showReverifyForm()
    {
        return view('auth.emails.reverify');
    }

    /**Need to  resend email verify link*/
    public function resendEmailVerifyLink(Request $request) {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!empty($user)) {
            $verificationLink = url('/verify-email/' . $user->verification_token);
            Mail::to($user->email)->send(new VerifyEmail($verificationLink, $user->name));
            return redirect()->route('auth.loginpage')->with('success', 'Verification email sent successfully. Please verify your email to activate your account.');
        }

        return redirect()->back()->with('error', 'User not found');
    }
}
