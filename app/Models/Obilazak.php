<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obilazak extends Model
{
    use HasFactory;
    protected $table = 'table_obilazak';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'sifra_agenta',
        'sifra_nekretnine',
        'datum_i_vreme_obilaska',
    ];
    
    public function agentObilazi()
    {
        return $this->belongsTo(Agent::class, foreignKey: 'sifra_agenta', ownerKey: 'id');
    }
    public function nekretninuObilazi()
    {
        return $this->belongsTo(Nekretnine::class, foreignKey: 'sifra_nekretnine', ownerKey: 'id_nekretnine');
    }
}
