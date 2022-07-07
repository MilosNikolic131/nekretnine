<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nekretnine extends Model
{
    use HasFactory;
    protected $table = 'table_nekretnine';
    protected $primaryKey = 'id_nekretnine';
    public $timestamps = false;
    protected $fillable = [
        'id_nekretnine',
        'Adresa',
        'cena_po_kvadratu',
        'tip_nekretnine',
        'agent_zaduzen_za_nekretninu'
    ];
    public function zakazanObilazak()
    {
        return $this->hasMany(Obilazak::class, foreignKey: 'sifra_nekretnine', localKey: 'id_nekretnine');
    }

    public function zaduzenAgent()
    {
        return $this->belongsTo(Agent::class, foreignKey: 'agent_zaduzen_za_nekretninu', ownerKey: 'id');
    }
    public function tipNekretnine()
    {
        return $this->belongsTo(Tip_Nekretnine::class, foreignKey: 'tip_nekretnine', ownerKey: 'tip_id');
    }
}
