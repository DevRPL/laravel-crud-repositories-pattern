<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Services\Contracts\DepartmentServiceContract;

class DepartmentComposer
{
    /**
     * @var departmentServiceContract
     */
    protected $department;

    /**
     * Constructor.
     *
     * @param
     */
    public function __construct(DepartmentServiceContract $department)
    {
        $this->department = $department;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $departments = $this->department->all();
        $view->with('departments', $departments);
    }
}
