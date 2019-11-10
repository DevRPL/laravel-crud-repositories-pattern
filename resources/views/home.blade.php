@extends('layouts.app')

@section('content')
@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered"> 
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Department</th>
                                <th>Total Employee</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($count_employees as $no => $employee)
                                <tr>
                                    <td>{{ $no +1 }}</td>
                                    <td>{{ $employee->department->name ?? '' }}</td>
                                    <td>{{ $employee->total_employee }}</td>
                                </tr>
                                @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection
