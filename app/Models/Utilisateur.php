<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\role_utilisateur;

class Utilisateur extends Model
{
    use HasFactory;
    public function role_utilisateur()
    {
        return $this->belongsTo(RoleUtilisateur::class);
    }
    protected $table = "utilisateurs";
    protected $primaryKey="id_Utilisateur";
    protected $fillable = ['nom','prenom','email','password','id_Role_Utilisateur'];
}
