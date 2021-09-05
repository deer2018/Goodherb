<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    protected $table = "medic_per";

    protected $primaryKey = 'id';

    protected $fillable = ['username', 'surname', 'sex', 'age' , 'phone'];
}
