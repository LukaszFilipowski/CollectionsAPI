<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;

class AuthController extends Controller
{
    public function generateToken() 
    {
        do {
            $finded = false;
            $token = str_random(16);
            $tokenExists = Token::where('token', $token)->count();

            if ($tokenExists == 0) {
                $finded = true;
                $t = new Token;
                $t->token = $token;
                $t->save();
            }
            
        } while ($finded == false);
        
        return $t;
    }
}
