<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medic_Emotion extends Model
{
    protected $table = 'medic_emotion';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'emotion'];
}
