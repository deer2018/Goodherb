<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questiontwo_two extends Model
{
    protected $table = '_q2_2';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'ep2_1', 'ep2_2', 'ep2_3', 'ep2_4', 'ep2_5','total'

    ];
}
