<?php

namespace Modules\HowKnow\Entities;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Support\Traits\Selectable;

class Reason extends Model
{
    use HasFactory, Filterable,Selectable;

   /**
     * @var string
     */
    protected $table = 'reasons';

    protected $fillable = ['reason'];



}
