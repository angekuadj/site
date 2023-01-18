<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function times()
    {
        return $this->hasMany(Etudiant::class);
    }
    public function cours()
    {
        return $this->hasMany(Cour::class,);
    }
   

}
