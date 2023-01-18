<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function cour()
    {
        return $this->hasMany(Cour::class);
       
       
    }
    public function day()
    {
        return $this->hasMany(Day::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

   
}
