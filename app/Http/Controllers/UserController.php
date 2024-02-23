<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends HomeController
{
    public function show($id, $name)
    {
        return view('user', compact('id', 'name'));
    }
}
