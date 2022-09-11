<?php

namespace App\Models;

use App\Enums\CampaignStatus;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Campaign extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use Sluggable;

    public const MEDIA_COLLECTION_COVER = 'cover';

    protected $fillable = [
        'created_by',
        'content',
        'status',
        'summary',
        'title',
    ];

    protected $casts = [
        'meta_tags' => 'array',
        'status' => CampaignStatus::class
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION_COVER)
            ->useFallbackUrl(asset('images/image-placeholder.jpg'))
            ->singleFile();
    }

    public function sluggable(): array
    {
        return [
            'handle' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * @return BelongsTo<User, Campaign>
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
