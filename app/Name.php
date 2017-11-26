<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'names';
    
    public $fillable = ['name', 'token'];
    
    public function collections() 
    {
        
        return $this->belongsToMany('App\Collection');
    }
    
    public static function validator()
    {
        
        return [
            'name' => 'required',
            'token' => 'required'
        ];
    }
}
