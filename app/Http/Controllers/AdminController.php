<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function user()
    {
        return view('admin.users');
    }
}
