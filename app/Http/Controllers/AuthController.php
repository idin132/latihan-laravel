<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store() {
        return view('next');
    }
}