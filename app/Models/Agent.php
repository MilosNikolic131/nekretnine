<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Agent extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'table_agent';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ime_i_prezime',
        'password',
        'JMBG'
    ];
    public function zakazanObilazak()
    {
        return $this->hasMany(Obilazak::class, foreignKey: 'sifra_agenta', localKey: 'id');
    }

    public function zaduzenZaNekretninu()
    {
        return $this->hasMany(Nekretnine::class, foreignKey: 'agent_zaduzen_za_nekretninu', localKey: 'id');
    }
}
