<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Employee.
 */
class Employee extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'name', 'address', 'email', 'phone', 'depertement_id', 'created_at', 'updated_at',
    ];

    public function depertement()
    {
        return $this->belongsTo(Depertement::class);
    }
}
