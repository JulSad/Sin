<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table="comments";
    
   
 
  
    public function articles(){
    return $this->belongsTo('App\Article');
}


}