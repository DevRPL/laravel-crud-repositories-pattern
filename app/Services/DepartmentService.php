<?php

namespace App\Services;

use App\Services\Contracts\DepartmentServiceContract;
use App\Repositories\DepartmentRepository;

class DepartmentService implements DepartmentServiceContract
{
    protected $department;

    public function __construct(DepartmentRepository $department)
    {
        $this->department = $department;
    }

    public function all($columns = ['*'])
    {
        return $this->department->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->department->find($id);
    }

    public function create(array $attributes)
    {
        return $this->department->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->department->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->department->find($id);
    }
}
