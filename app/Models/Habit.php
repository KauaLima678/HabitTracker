<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    protected $fillable = ['name', 'user_id'];

    // Hábitos pertencem a somente um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Hábitos podem ter vários registros
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
