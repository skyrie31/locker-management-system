<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //method to show dboard

    public function index(){
        return view('dashboard');
    }
}
