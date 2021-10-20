<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Anggota extends Authenticatable
{
    use Notifiable;
    protected $guard = 'anggota';
    protected $table ="anggota";
    protected $primaryKey = "nim";
    protected $fillable = [
        'nama', 
        'email',
        'password',
        'alamat',
        'kota',
        'no_telp',
    ];
 
    protected $hidden = [
        'password',
        'remember_token',
    ]; 
}
