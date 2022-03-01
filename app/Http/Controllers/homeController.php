<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        return view('template.home');
    }

    public function login() {
        return view('template.login');
    }

    public function singup() {
        return view('template.signup');
    }
}
