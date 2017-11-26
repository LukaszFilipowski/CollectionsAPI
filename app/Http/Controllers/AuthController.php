<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function generateToken() 
    {
        
        return str_random(16);
    }
}
