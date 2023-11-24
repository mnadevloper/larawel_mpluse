<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
      /**Need to load profile view */
      public function loadProfileView() {
        return view('My_Profile');
    }

    /**Need to load change password view */
    public function loadChangePassword() {
        return view('Change_Password');
    }

    /**Need to load change mpin view */
    public function loadChangeMpin() {
        return view('Change_Mpin');
    }
}
