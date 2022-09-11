<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortLinkClick extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_link_id',
        'browser',
        'country_code',
        'device_type',
        'referrer_hostname',
        'referrer_pathname',
    ];

    /**
     * @return BelongsTo<ShortLink, ShortLinkClick>
     */
    public function shortLink(): BelongsTo
    {
        return $this->belongsTo(ShortLink::class);
    }
}
