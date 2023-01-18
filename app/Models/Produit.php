<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prix','description','Dd','Df'
    ];

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}
