@extends('adminlte::page')

@section('title', 'Tehnika')

@section('content_header')
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:transparent !Important;">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-fw fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route("trucks.index") }}">Tehnika</a></li>
                </ol>
            </nav>
        </div>
        <div class="col text-right">
            <div class="btn-group">
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    @if (session('status'))
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @isset($errors)
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @isset($errors)
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br />
                    @endforeach
                @endisset
            </div>
        @endif
    @endisset
    <form method="POST" action="{{ route('trucks.store') }}">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Veids</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="truck_type">
                            @foreach($truckTypes as $key => $truckType)
                            <option value="{{ $key }}">{{ $truckType }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Numurs</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control validate-input"
                            name="truck_number" required minlength="3" maxlength="10">
                        <div id="truck_number_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Marka</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control validate-input" 
                            name="truck_make" required minlength="3" maxlength="100">
                        <div id="truck_make_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Modelis</label>
                    <div class="col-sm-10">
                        <input type="text" name="truck_model" class="form-control validate-input" maxlength="100">
                        <div id="truck_model_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Gads</label>
                    <div class="col-sm-10">
                        <input type="text" name="truck_year" pattern="\d*" class="form-control validate-input" 
                            required minlength="4" maxlength="4">
                        <div id="truck_year_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Vin numurs</label>
                    <div class="col-sm-10">
                        <input type="text" name="truck_vin_number" class="form-control" maxlength="100">
                    </div>
                </div>
            </div>
            <div class="card-footer text-right"">
                <a class="btn btn-secondary" href="{{ route('trucks.index') }}">Atpakaļ</a>
                <button type="submit" class="btn btn-primary">Pievienot</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
@stop