<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
       'produit_id', 'numero','typepaiement_id'
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
    public function typepaiement()
    {
        return $this->belongsTo(Typepaiement::class);
    }

}
