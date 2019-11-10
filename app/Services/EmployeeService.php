<?php

namespace App\Services;

use App\Entities\Employee;
use App\Repositories\EmployeeRepository;
use App\Services\Contracts\EmployeeServiceContract;

class EmployeeService implements EmployeeServiceContract
{
    protected $employee;

    public function __construct(EmployeeRepository $employee)
    {
        $this->employee = $employee;
    }

    public function all($columns = ['*'])
    {
        return $this->employee->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->employee->find($id);
    }

    public function create(array $attributes)
    {
        return $this->employee->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->employee->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->employee->find($id);
    }

    public function countEmployeeAllDepartment()
    {
        return $this->employee->countEmployeeAllDepartment();
    }
}
