<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin()
    {
        return view('admin.login', [
            "title" => "Login Admin KSAJ"
        ]);
    }
    public function user()
    {
        return view('website.home', [
            "title" => "KSAJ"
        ]);
    }
}
