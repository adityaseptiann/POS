<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends HomeController
{
    public function index()
    {
        return view('sales');
    }
}
