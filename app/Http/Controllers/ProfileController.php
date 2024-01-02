<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userProfile;

class ProfileController extends Controller
{
    public function profile() 
    {
        $profile_data=userProfile::first();
        return view('profile', compact('profile_data'));
    }
}

