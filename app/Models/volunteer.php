<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    protected $table = "volunteer_per";

    protected $primaryKey = 'id';

    protected $fillable = ['username', 'surname', 'sex', 'age' , 'phone'];

}
