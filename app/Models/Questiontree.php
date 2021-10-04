<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questiontree extends Model
{
    protected $table = '_q3_1';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'ep4_1'

    ];
}