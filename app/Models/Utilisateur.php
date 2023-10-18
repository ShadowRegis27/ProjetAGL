<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    public function role_utilisateur()
    {
        return $this->belongsTo(RoleUtilisateur::class);
    }
}
