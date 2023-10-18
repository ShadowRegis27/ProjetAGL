<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatuIncident extends Model
{
    use HasFactory;
    protected $table = "statu_incidents";
    protected $primaryKey="id_Statut_Incident";
    protected $fillable = ['nom_Statut_Incident'];
}
