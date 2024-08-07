<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\BelongsTo;

use Illuminate\Database\Eloquent\Model;

// use App\Models\Attendee;
// use App\Models\User;

class Event extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
       return $this->belongsTo(User::class);
    }

    public function attendee(): HasMany
    {
       return $this->hasMany(Attendee::class);
    }
}
