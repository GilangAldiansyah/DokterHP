<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'handphone';
    protected $fillable =[
        'username',
        'password',
        'alamat',
        'no_hp',
    ];
}
