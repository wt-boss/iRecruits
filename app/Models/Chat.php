<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chat extends Model
{
    use HasFactory;
    public function invitation():BelongsTo{

        return $this->belongsTo(Invitation::class);
    }

    
    public function messages():HasMany{
        return $this->hasMany(Message::class);
    }
}
