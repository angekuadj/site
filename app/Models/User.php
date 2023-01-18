<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles ;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[];
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'sexe','classe_id','filiere_id','matricule','DN','contact','contactP',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class);
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
