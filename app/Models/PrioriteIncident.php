<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrioriteIncident extends Model
{
    use HasFactory;
    protected $table = "priorite_incidents";
    protected $primaryKey="id_Priorite_Incident";
    protected $fillable = ['nom_Priorite_Incident','niveau_Priorite_Incident'];
}
