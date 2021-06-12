<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function upload(Request $request)
    {
        $request->file('photo')->store('profiles');
        return redirect('profile');
    }
}
