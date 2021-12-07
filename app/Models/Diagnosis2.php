<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis2 extends Model
{
    protected $table = 'diagnosis2';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'advice2'];
}
