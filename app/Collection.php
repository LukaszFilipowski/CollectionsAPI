<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'collections';
    
    public $fillable = ['name', 'token'];\
    
    public function names() 
    {
        
        
        return $this->belongsToMany('App\Name');
    }
    
    public static function validator()
    {
        
        return [
            'name' => 'required',
            'token' => 'required'
        ];
    }
}
