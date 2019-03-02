<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Depertement extends Model
{
    protected $table = 'depertements';

    protected $fillable = [
        'depertement_name', 'created_at', 'updated_at',
    ];
}
