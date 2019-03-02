<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'nik', 'name', 'address', 'email', 'phone', 'depertement_id', 'created_at', 'updated_at',
    ];

    public function depertement()
    {
        return $this->belongsTo(Depertement::class);
    }
}
