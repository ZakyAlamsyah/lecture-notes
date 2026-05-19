<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class schedule extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'jadwal',
        'hari',
        'jam',
        'kelas',
        'ruang',
        'mata_kuliah',
        'dosen',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
