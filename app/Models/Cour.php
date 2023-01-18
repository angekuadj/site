<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','classe_id','filiere_id','Dd','Df','day_id','prof_id','cour_id','salle_id'
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
    public function day()
    {
        return $this->belongsTo(Day::class);
    }
    public function prof()
    {
        return $this->belongsTo(Prof::class);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function cour()
    {
        return $this->belongsTo(Cour::class);
    }
   
}
