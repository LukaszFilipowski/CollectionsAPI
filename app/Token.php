<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tokens';
    
    public $fillable = ['token'];
    
    public static function validator()
    {
        if($tokenId != null) {
            
            return [
                'token' => 'required|unique:tokens,token,'.$token->id
            ];
        }
        
        return [
            'token' => 'required|unique:tokens',  
        ];
    }
}
