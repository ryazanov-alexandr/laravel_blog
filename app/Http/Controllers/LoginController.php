<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {


        return view('login.index');

    }

    public function store(Request $request) {
        alert(__('Добро пожаловать!'));

        return redirect()->route('user');
    }
}
