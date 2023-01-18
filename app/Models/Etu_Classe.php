<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etu_Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'classe_id'
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
