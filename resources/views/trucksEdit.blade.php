@extends('adminlte::page')

@section('title', 'Klasifikatori - Izmaksu grupas')

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
            <div class="btn-group">
               
                <a class="btn btn-secondary" href="">
                    Pievienot
                </a>
                
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <form>
        <div class="card">
            <div class="card-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Veids</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>Vilcējs</option>
                                <option>Traktors</option>
                                <option>Piekabe</option>
                                <option>Konteiners</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Numurs</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $truck->truck_number }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Marka</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_make }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Modelis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_model }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Gads</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_year }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Vin numurs</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_vin_number }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Skate</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_technical_inspection }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Octa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_insurance }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kasko</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $truck->truck_cc_insurance }}">
                        </div>
                    </div>
                
            </div>
            <div class="card-footer text-right"">
                <button class="btn btn-primary">Labot</button>
            </div>
        </div>
    </form>  
</div>
@endsection
