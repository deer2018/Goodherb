<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emotion_t extends Model
{
    protected $table = 'emotion_t';

    protected $primaryKey = 'id';

    protected $fillable = ['emotion','emotion_name'];
}
