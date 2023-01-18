<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepaiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

}
