@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create {{ $page }}</div>
    
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.store') }}">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nik:</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" class="form-control" placeholder="Nik">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address:</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="address" class="form-control" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deperement:</label>
                            <div class="col-sm-10">
                                @component('shared.block.inp_depertement', [
                                 'depertements' => $depertements, 'name' => 'depertement_id'
                                ]) @endcomponent
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4">
                                {{ csrf_field() }}
                                @component('shared.block.btn_submit_store') @endcomponent
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
