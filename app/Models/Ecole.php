<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ecole extends Model
{
    use HasFactory;

    public function etudiants():BelongsToMany{
         return $this->belongsToMany(Etudiant::class);
    }
    
    public function departements():BelongsToMany{
        return $this->belongsToMany(Departement::class);
   }

}
