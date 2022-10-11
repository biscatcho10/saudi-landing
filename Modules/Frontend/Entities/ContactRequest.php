<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\HowKnow\Entities\Reason;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "nationality",
        "email",
        "phone_number",
        "profession",
        "reference_num",
        "reason_id",
    ];

    public function reason()
    {
        return $this->belongsTo(Reason::class);
    }

}
