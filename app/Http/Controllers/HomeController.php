<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirects()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin/adminhome');
        }
        else
        {
            return view('home');
        }
    }
}
