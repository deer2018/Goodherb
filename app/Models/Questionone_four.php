<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionone_four extends Model
{
    protected $table = '_q1_4';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'ep4_1', 'ep4_2', 'ep4_3', 'ep4_4', 'ep4_5', 'ep4_6', 'ep4_7', 'ep4_8', 'ep4_9', 'ep4_10'

    ];
}
