<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    // public function days()
    // {
    //     return $this->hasMany(Etudiant::class);
    // }
   
    // public function cours()
    // {
    //     return $this->hasMany(Cour::class);
    // }
   

}
