<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutUsTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'map_address', 'video_title', 'video_description', 'foundation', 'sub_foundation', 'our_vision', 'our_message', 'our_goals'];

    protected $table = 'about_us_translations';

    public $timestamps = false;

}
