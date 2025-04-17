<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoilAnalysis extends Model
{
    use HasFactory;

    // Relatie met Project (een analyse hoort bij één project)
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
