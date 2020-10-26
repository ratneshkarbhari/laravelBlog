<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{

    protected $table = 'admins';


    use HasFactory;

    public function fetch_by_username($username){
        return $this->where('username',$username)->first();    
    }

}
