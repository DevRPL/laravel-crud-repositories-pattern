@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage {{ $page }}</div>
    
                <div class="card-body">
                    @component('shared.block.btn_create', ['route' => 'departments.create']) 
                    @endcomponent
                    
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Department Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($departments as $no => $department)
                                <tr>
                                    <td>{{ $no +1 }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        @component('shared.block.btn_icon_edit', [
                                            'route' => 'departments.edit',
                                            'params' => ['id' => $department->id]
                                        ]) @endcomponent
                                            @component('shared.block.btn_icon_delete', [
                                            'route' => 'departments.destroy',
                                            'params' => ['id' => $department->id]
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
