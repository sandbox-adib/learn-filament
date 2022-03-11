<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorizingEveryday extends Model
{
    use HasFactory;

    protected $guarded = ['timestamps'];

    /**
     * Get the user that owns the MemorizingEveryday
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
