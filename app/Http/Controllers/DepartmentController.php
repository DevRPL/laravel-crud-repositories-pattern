<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DepartmentRepository;

/**
 * Class DepartmentController.
 */
class DepartmentController extends Controller
{
    /**
     * @var DepartmentRepository
     */
    protected $department;

    /**
     * DepartmentsController constructor.
     *
     * @param DepartmentRepository $repository
     */
    public function __construct(DepartmentRepository $department)
    {
        $this->department = $department;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->department->all();

        return view('department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        $department = $this->department->create($request->all());

        if ($request->input('action') == 'save') {
            return redirect()->back();
        } else {
            return redirect()->route('departments.index');
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
        $department = $this->department->find($id);

        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string                   $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        $this->department->update($data, $id);

        if ($request->input('action') == 'update') {
            return redirect()->back();
        } else {
            return redirect()->route('departments.index');
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
        $this->department->delete($id);

        return redirect()->back();
    }
}
