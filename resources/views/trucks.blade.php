@extends('adminlte::page')

@section('title', 'Klasifikatori - Izmaksu grupas')

@section('content_header')
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:transparent !Important;">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-fw fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Tehnika</a></li>
                </ol>
            </nav>
        </div>
        <div class="col text-right">
            <div class="btn-group">
               
                <a class="btn btn-primary" href="">
                    Pievienot
                </a>
                
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th><th>Numurs</th><th>Tips</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td><td>KU 2412</td><td>Automašīna 1</td>
                    </tr>
                    <tr>
                        <td>2</td><td>AB 5532</td><td>Traktors</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>       
</div>
@endsection
