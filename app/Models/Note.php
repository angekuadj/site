<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'examen','note1','user_id','classe_id','note2','note3','note4','note5','note6','note7','note8','note9','note10','note11','note12','note13',
    ];
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
   
   

}
