<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// controller
class FrontController extends Controller
{
    public function index() {
        return view('Frontend.home');
    }
}
