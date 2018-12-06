<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile')->with('profile', $profile);
    }
}
