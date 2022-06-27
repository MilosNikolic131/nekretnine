<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Korisnik extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'table_korisnik';
    public $timestamps = false;
    protected $fillable = [
        'email',
        'password'
    ];
}
