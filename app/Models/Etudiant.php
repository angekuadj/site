<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'sexe','classe_id','filiere_id','matricule','DN','contact','contactP','user_id'
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function etu_Classes()
    {
        return $this->hasMany(etu_Classe::class);
    }

}
