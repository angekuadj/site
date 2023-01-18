<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semaine extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function days()
    {
        return $this->hasMany(Day::class);
    }
    public function cours()
    {
        return $this->hasMany(Cour::class,);
    }
   

}
