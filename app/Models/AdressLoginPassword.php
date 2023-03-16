<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdressLoginPassword extends Model
{
    protected $fillable = ['address', 'login', 'password'];
}
