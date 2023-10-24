<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class PrioriteIncident extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = "priorite_incidents";
    protected $primaryKey="id_Priorite_Incident";
    protected $fillable = ['nom_Priorite_Incident','niveau_Priorite_Incident'];
}
