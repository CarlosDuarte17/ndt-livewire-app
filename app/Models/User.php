<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserStatus;
use App\Traits\HasProfilePhoto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens;
    use InteractsWithMedia;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;

    public const MEDIA_COLLECTION_PICTURE = 'picture';

    protected $fillable = [
        'name',
        'email',
        'password',
        'position',
        'rol',
        'telephone',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => UserStatus::class,
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION_PICTURE)
            ->useFallbackUrl($this->profile_photo_url)
            ->singleFile();
    }

    /**
     * @return HasMany<Campaign>
     */
    public function campaigns(): HasMany
    {
        return $this->hasMany(Campaign::class, 'created_by');
    }

    /**
     * @return HasMany<Chat>
     */
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class, 'sender_id')
            ->orWhere('chats.receiver_id', $this->getKey());
    }
}
