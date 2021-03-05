<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    //use SoftDeletes;
    //protected $primaryKey = 'id';

	protected $table = 'books';
	//protected $fillable = ['name'];
   
    //public  $timestamps = false;
    
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
    
    protected $dates = ['deleted_at'];
    
    public function getCoverAttribute($value)
    {
        if(isset($value)){
            //$imagepath = config('storage_path').'storage/app/'.$value;
            $imagepath = 'http://localhost/aziksha-laravel/storage/app/'.$value;
            
        }else{
            $imagepath =  asset('public/default/auther.png');
        }
        return $imagepath;
    }
    public function getPdfAttribute($value)
    {
        if(isset($value)){
            //$imagepath = config('storage_path').'storage/app/'.$value;
            $imagepath = 'http://localhost/aziksha-laravel/storage/app/'.$value;
            
        }else{
            $imagepath =  asset('public/default/auther.png');
        }
        return $imagepath;
    }
    
   /*
    public function verifyUser()
    {
    return $this->hasOne('App\VerifyUser');
    }
    */
    /*
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    */

}