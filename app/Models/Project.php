<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Definieer de relatie met User (een project heeft één eigenaar)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relatie met SoilAnalysis (een project heeft veel analyses)
    public function soilAnalyses()
    {
        return $this->hasMany(SoilAnalysis::class);
    }
}
