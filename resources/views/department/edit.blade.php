@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{ $page }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('departments.update', ['id' => $department->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{ $department->name }}" placeholder="Departments">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4">
                                {{ csrf_field() }}
                                @component('shared.block.btn_submit_update') @endcomponent
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
