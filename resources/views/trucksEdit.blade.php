@extends('adminlte::page')

@section('title', 'Tehnika - '.$truck->truck_number)

@section('content_header')
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:transparent !Important;">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-fw fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route("trucks.index") }}">Tehnika</a></li>
                    <li class="breadcrumb-item active">{{ $truck->truck_number }}</li>
                </ol>
            </nav>
        </div>
        <div class="col text-right">
        </div>
    </div>
</div>
@stop

@section('content')
    @if (isset($truck))
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

            <form method="POST" action="{{ route('trucks.update', ['truck' => $truckId]) }}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Veids</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="truck_type">
                                    @foreach($truckTypes as $key => $truckType)
                                    <option @if($key == $truck->truck_type) selected @endif value="{{ $key }}">{{ $truckType }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Numurs</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $truck->truck_number }}"
                                    name="truck_number" required>
                                    <div id="coeff_to_feedback" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Marka</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $truck->truck_make }}"
                                    name="truck_make" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Modelis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $truck->truck_model }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Gads</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $truck->truck_year }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Vin numurs</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $truck->truck_vin_number }}">
                            </div>
                        </div>
                        <h4>Atgādinājumi</h4>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Skate</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_technical_inspection }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Vinjete</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_technical_inspection }}">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_insurance }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Octa</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_insurance }}">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_insurance }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kasko</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control datepicker" value="{{ $truck->truck_cc_insurance }}">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_insurance }}">
                            </div>
                        </div>
                        <h4>Atļaujas</h4>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pašpārvadājumu</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_technical_inspection }}">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_technical_inspection }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Atkritumu</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_technical_inspection }}">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{{ $truck->truck_technical_inspection }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right"">
                        <a class="btn btn-secondary" href="{{ route('trucks.index') }}">Atpakaļ</a>
                        <button type="submit" class="btn btn-primary">Labot</button>
                    </div>
                </div>
            </form>  
        </div>
        <br />
    @endisset
@endsection

@section('js')
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
@stop
