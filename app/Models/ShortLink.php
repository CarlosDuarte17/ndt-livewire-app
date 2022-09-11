<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShortLink extends Model
{
    use HasFactory;

    public const HASH_SIZE = 6;

    protected $fillable = [
        'hash',
        'target',
        'title',
    ];

    /**
     * @return HasMany<ShortLinkClick>
     */
    public function clicks(): HasMany
    {
        return $this->hasMany(ShortLinkClick::class);
    }
}
