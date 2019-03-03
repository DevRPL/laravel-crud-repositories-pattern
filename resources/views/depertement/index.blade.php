@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage {{ $page }}</div>
    
                <div class="card-body">
                    @component('shared.block.btn_create', ['route' => 'employees.create']) 
                    @endcomponent
                    
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Depertement Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($depertements as $no => $depertement)
                                <tr>
                                    <td>{{ $no +1 }}</td>
                                    <td>{{ $depertement->depertement_name }}</td>
                                    <td>
                                        @component('shared.block.btn_icon_edit', [
                                            'route' => 'depertements.edit',
                                            'params' => ['id' => $depertement->id]
                                        ]) @endcomponent
                                            @component('shared.block.btn_icon_delete', [
                                            'route' => 'depertements.destroy',
                                            'params' => ['id' => $depertement->id]
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
