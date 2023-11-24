<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\UserKyc;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{

    protected $commonHelper;

    public function __construct(CommonHelper $commonHelper)
    {
        $this->commonHelper = $commonHelper;
    }

    public function loadRegisterPage() {
        return view('auth.registeration');
    }

    /**Need to store user data */
    public function userSignUp(Request $request) {

        $request->validate([
            'username' => 'required|regex:/^[A-Za-z\s]+$/',
            'mobile' => 'required|digits:10|integer|unique:users,mobile',
            // 'email' => 'required|email|unique:users,email',
            'email' => 'required|email',
            'password' => 'required',

        ]);

        try {

            /**Need to user alerady exist or not and if user already regiter then email verification completed of not */
            $chk_existing_user = User::where('email', $request->email)->first();
            if(!empty($chk_existing_user)) {
                if($chk_existing_user->email_verified_at == null || empty($chk_existing_user->email_verified_at)) {
                    return redirect()->route('reverify.email')->with('info', 'User already registered. Please verify your email to activate your account.');
                } else {
                    return redirect()->route('auth.loginpage')->with('info', 'User already registred, please logging in.');
                }
            }

            /**Need to generate random user id */
            $useridPrefix = 'MP19';
            $unique = false;


            while (!$unique) {
                $randomDigitsUser = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT); // Generate 4 random digits for User ID
                $userid = $useridPrefix . $randomDigitsUser;

                $randomString = Str::random(6); // Generate a random string of length 3
                $randomDigitsMid = str_pad(mt_rand(1, 999), 4, '0', STR_PAD_LEFT); // Generate 3 random digits for MID
                $mid = $randomString . $randomDigitsMid;

                // Check if the generated User ID or MID already exists in the database
                $existingUser = User::where('userid', $userid)->orWhere('mid', $mid)->first();
                if (!$existingUser) {
                    $unique = true;
                }
            }

            $add_user = new User();
            $add_user->userid = $userid;
            $add_user->mid = $mid;
            $add_user->name = $request->username;
            $add_user->mobile = $request->mobile;
            $add_user->email = $request->email;
            $add_user->password = Hash::make($request->password);
            $add_user->verification_token = Str::random(40);
            $save_user = $add_user->save();
            if($save_user) {
                $last_inserted_id = !empty($add_user->id) ? $add_user->id : '';
                $user_kyc = new UserKyc();
                $user_kyc->user_id = $last_inserted_id;
                $user_kyc->save();

                // Send the verification email
                $verificationLink = url('/verify-email/' . $add_user->verification_token);
                $mail_send = Mail::to($add_user->email)->send(new VerifyEmail($verificationLink, $add_user->name));

                if($mail_send) {
                    return redirect()->route('auth.loginpage')->with('success', 'User registered successfully. Please verify your email to activate your account.');
                } else {
                    return redirect()->back()->with('error', 'User registered successfully, but failed to send the verification email. Please contact support for assistance.');
                }

            } else {
                return redirect()->back()->with('error', 'Failed to register user. Please try again later.');
            }

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    /**Need to load login page */
    public function loadLoginPage() {

        if(!empty(Auth::user())) {
            return redirect()->route('auth.index');
        }
        return view('auth.user_login');
    }

    /**Need to login user */
    public function userSignIn(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user_auth = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if($user_auth) {
            if (Auth::user()->email_verified_at != null) {
                return redirect()->route('auth.index');
            } else {
                Auth::logout();
                return redirect()->route('reverify.email')->with('info', 'Please verify your email before logging in.');
            }
        } else {
            return redirect()->route('auth.loginpage')->with('error', 'Wrong email/password, please retry.');
        }
    }

    public function logout() {
        Auth::logout();
      return redirect(route('auth.loginpage'));
    }

        /**Need to generate api key via sanctum token */
        public function generateApiKey() {
            $user = Auth::user();
            if ($user) {
                $token = $user->createToken('api-key')->plainTextToken;
                $tokenValue = explode('|', $token, 2)[1];
                return response()->json(['token' => $tokenValue], 200);
            } else {
                return response()->json(['message' => 'User not found'], 404);
            }
        }

        /**Need to return 403 permission error */
        public function permissionPageError() {
            return view('error.page-error-403');
        }
}
