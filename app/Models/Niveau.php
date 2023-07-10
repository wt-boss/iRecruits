<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Niveau extends Model
{
    use HasFactory;

    public function etudiants():BelongsToMany{

        return $this->belongsToMany(Etudiant::class);
    }
}
