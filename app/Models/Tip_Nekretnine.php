<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip_Nekretnine extends Model
{
    use HasFactory;
    protected $table = 'table_tip_nekretnine';
    public $timestamps = false;
    protected $fillable = [
        'tip_id',
        'naziv',
        'kvadratura',
        'oprema'
    ];
    
    public function jeNekretnina()
    {
        return $this->hasMany(Nekretnine::class, foreignKey: 'tip_nekretnine', localKey: 'tip_id');
    }
   
}
