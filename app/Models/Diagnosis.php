<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $table = 'diagnosis';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'advice'];
}
