<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //public function tweet(){
    public function UserProfile(){
        return $this->belongsTo('App\User');
}
