<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prioriteincident extends Model
{
    use HasFactory;
    protected $table = "prioriteincidents";
    protected $primaryKey="id_prioriteincident";
    protected $fillable = ['nom_prioriteincident','descriptionprioriteincident','localisationprioriteincident'];
}
