@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage {{ $page}}</div>
                    <div class="card-body">
                    @component('shared.block.btn_create', ['route' => 'employees.create']) @endcomponent
                    <table id="example" class="table table-striped table-bordered"> 
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Depertement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $no => $employee)
                                <tr>
                                    <td>{{ $no +1 }}</td>
                                    <td>{{ $employee->nik }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->depertement->depertement_name }}</td>
                                    <td>
                                        @component('shared.block.btn_icon_edit', [
                                            'route' => 'employees.edit',
                                            'params' => ['id' => $employee->id]
                                        ]) @endcomponent
                                            @component('shared.block.btn_icon_delete', [
                                            'route' => 'employees.destroy',
                                            'params' => ['id' => $employee->id]
                                        ]) @endcomponent
                                    </td>
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
@endsection
