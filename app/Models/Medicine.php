<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'medicine', 'quantity', 'total'];
}
