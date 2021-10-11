<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questiontwo_tree extends Model
{
    protected $table = '_q2_3';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'ep3_1', 'ep3_2', 'ep3_3', 'ep3_4', 'ep3_5', 'ep3_6', 'ep3_7', 'ep3_8', 'ep3_9', 'ep3_10', 'ep3_11', 'ep3_12', 'ep3_13',
        'ep3_14', 'ep3_15', 'ep3_16', 'ep3_17', 'ep3_18', 'ep3_19', 'ep3_20', 'ep3_21', 'ep3_22', 'ep3_23', 'ep3_24', 'ep3_24', 'ep3_25', 'ep3_26','total'
        ,'group'
    ];
}
