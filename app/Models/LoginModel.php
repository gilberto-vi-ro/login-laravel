<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table = 'my_users';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'email', 'password'];


}
