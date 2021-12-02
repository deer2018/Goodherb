<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emotion_r extends Model
{
    protected $table = 'emotion_r';

    protected $primaryKey = 'emotion';

    protected $fillable = ['emotion_name'];
}
