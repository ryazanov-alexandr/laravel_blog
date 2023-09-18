<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        $data = $request->all();

        if($name = $request['name']) {
            $name = strtoupper($name);
        }

        return redirect()->route('user');
    }
}
