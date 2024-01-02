<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProfile extends Model
{
    use HasFactory;
    protected $table='users';
    protected $fillable=['username', 'name', 'nim', 'email', 'profile_image', 'address', 'birthday', 'country', 'phone', 'website'];
    
}
