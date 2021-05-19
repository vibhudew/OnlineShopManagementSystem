<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

<<<<<<< HEAD
<<<<<<< HEAD
    protected $fillable = [
        'fname',
        'lname',
=======
    

    protected $fillable = [
        'name',
        'image',
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
    

    protected $fillable = [
        'name',
        'image',
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
        'address',
        'nic',
        'mobile',
        'email'
             
    ];
}
