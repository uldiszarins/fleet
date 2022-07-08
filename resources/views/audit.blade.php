@extends('adminlte::page')

@section('title', 'Klasifikatori - Izmaksu grupas')

@section('content_header')
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:transparent !Important;">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-fw fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#"></a></li>
                </ol>
            </nav>
        </div>
        <div class="col text-right">
            
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container-fluid">
    @if (isset($dati))
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" data-page-length="15" id="bankasTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelis</th>
                                <th>Darbība</th>
                                <th>Izveidots</th>
                                <th colspan="2">Dati</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dati as $audit)
                                <tr>
                                    <td>{{ $audit->id }}</td>
                                    <td>{{ $audit->subject_type }}</td>
                                    <td>{{ $audit->description }}</td>
                                    <td class="text-nowrap">{{ $audit->created_at }}</td>
                                    <td>
                                        @if($audit->description != 'created')
                                            @foreach($r[$audit->id] as $k => $au)
                                            
                                                @foreach($au as $key => $aa)
                                                <span>{{ __('messages.' . $key) }}</span><br />
                                                no <span class="badge badge-info">{{ $aa['old']}}</span> uz 
                                                <span class="badge badge-warning">{{ $aa['new'] }}</span><br />
                                                @endforeach
                                            
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{ $audit->properties }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    <br />
</div>
@endsection
