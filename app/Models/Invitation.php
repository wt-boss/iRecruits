<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    use HasFactory;

    public function chat():HasOne{
        return $this->hasOne(Chat::class);
    }

    public function etudiant():BelongsTo{
        return $this->belongsTo(Etudiant::class);
    }

    public function entreprise():BelongsTo{
        return $this->belongsTo(Entreprise::class);
    }
}
