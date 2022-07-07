@extends('adminlte::page')

@section('title', 'Darbinieki')

@section('content_header')
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:transparent !Important;">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-fw fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Darbinieki</a></li>
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
    <form method="POST" action="{{ route('employees.store') }}">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Vārds</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate-input" 
                            name="empl_name" required minlength="3" maxlength="100">
                        <div id="empl_name_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Uzvārds</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate-input" 
                            name="empl_surname" required minlength="3" maxlength="100">
                        <div id="empl_surname_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Telefons</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate-input"
                            name="empl_phone" required maxlength="8">
                        <div id="empl_phone_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Adrese</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate-input"
                            name="empl_address" required maxlength="100">
                        <div id="empl_address_feedback" class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right"">
                <a class="btn btn-secondary" href="{{ route('employees.index') }}">Atpakaļ</a>
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
