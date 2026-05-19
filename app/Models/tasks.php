<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'schedule_id',
        'user_id',
        'status',
    ];
}
