<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'users'; // Tabel MySQL
    protected $fillable = ['email', 'password'];
    public $timestamps = false; // Nonaktifkan timestamps
}
