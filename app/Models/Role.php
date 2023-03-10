<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
}
