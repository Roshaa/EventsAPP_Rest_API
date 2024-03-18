<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class attendee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function event(): HasMany{
        return $this->hasMany(Event::class);
    }
}
