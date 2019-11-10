<?php

namespace App\Http\Controllers;

use App\Services\Contracts\EmployeeServiceContract;

class HomeController extends Controller
{
    protected $employee;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeServiceContract $employee)
    {
        $this->middleware('auth');
        $this->employee = $employee;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_employees = $this->employee->countEmployeeAllDepartment();
        
        return view('home', compact('count_employees'));
    }
}
