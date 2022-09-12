<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'content',
    ];

    /**
     * @return BelongsTo<Chat, Message>
     */
    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }
}
