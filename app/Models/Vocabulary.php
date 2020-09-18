<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use UsesUuid;

    public $fillable = [
        'english',
        'portuguese'
    ];
}
