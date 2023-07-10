<?php

namespace App\Models;

use App\Models\Invitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etudiant extends Model
{
    use HasFactory;
    
    public function invitations():HasMany{
        return $this->hasMany(Invitation::class);
    }


    public function ecoles():BelongsToMany{
        return $this->belongsToMany(Ecole::class);
    }

    public function niveaux():BelongsToMany{

        return $this->belongsToMany(Niveau::class);
    }

}
