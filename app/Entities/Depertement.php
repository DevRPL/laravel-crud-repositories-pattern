<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Depertement.
 */
class Depertement extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'depertements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'depertement_name', 'created_at', 'updated_at',
    ];
}
