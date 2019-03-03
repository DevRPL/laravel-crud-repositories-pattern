<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Repositories\EmployeeRepository;

/**
 * Class employeesController.
 */
class EmployeeController extends Controller
{
    /**
     * @var EmployeeRepository
     */
    protected $employee;

    /**
     * EmployeesController constructor.
     *
     * @param EmployeeRepository $repository
     */
    public function __construct(EmployeeRepository $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employee->all();

        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployeeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EmployeeCreateRequest $request)
    {
        $employee = $this->employee->create($request->all());

        toastr_created();
        if ($request->input('action') == 'save') {
            return redirect()->back();
        } else {
            return redirect()->route('employees.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employee->find($id);

        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmployeeUpdateRequest $request
     * @param string                $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {
        $data = $request->except('_token', '_method');
        $employee = $this->employee->update($data, $id);

        toastr_updated();
        if ($request->input('action') == 'save') {
            return redirect()->back();
        } else {
            return redirect()->route('employees.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->employee->delete($id);

        toastr_deleted();

        return redirect()->back();
    }
}
