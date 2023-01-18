<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etu_Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id','classe_id'
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
