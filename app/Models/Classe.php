<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function cours()
    {
        return $this->hasMany(Cour::class);
    }

    public function etu_Classes()
    {
        return $this->hasMany(etu_Classe::class);
    }
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
   

}
