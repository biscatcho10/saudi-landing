<?php

namespace Modules\Settings\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Str;

class AboutUs extends Model implements HasMedia
{
    use HasFactory, Translatable, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = [
        'map_address',
        'video_type',
        'video_link',
        'longitude',
        'latitude',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $table = 'about_us';

    public $translatedAttributes = [
        'address',
        'video_title',
        'video_description',
        'foundation',
        'sub_foundation',
        'our_vision',
        'our_message',
        'our_goals'
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];


    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
        $this->addMediaCollection('videoImages');
    }


    // get video link
    public function getVideoUrlAttribute()
    {
        if ($this->video_type == 'link') {
            return $this->video_link;
        } else {
            return asset($this->getFirstMediaUrl('video'));
        }
    }


    public function getFoundation1()
    {
        return "<div class='editor_'>" . $this->foundation . "</div>";
    }

    public function getFoundation2()
    {
        return "<div class='editor_'>" . $this->sub_foundation . "</div>";
    }

    public function getOurVision()
    {
        return "<div class='editor_'>" . $this->our_vision . "</div>";
    }

    public function getOurMessage()
    {
        return "<div class='editor_'>" . $this->our_message . "</div>";
    }

    public function getOurGoals()
    {
        return "<div class='editor_'>" . $this->our_goals . "</div>";
    }
}
