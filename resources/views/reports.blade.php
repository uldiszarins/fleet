@extends('adminlte::page')

@section('title', 'Klasifikatori - Izmaksu grupas')

@section('content_header')
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:transparent !Important;">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-fw fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Pārskati</a></li>
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
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" >Tehnika</a>
        </li>
    </ul>
    <br />
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h5>Skates</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($skates as $skate)
                            <tr>
                                <td><a href="{{ route("trucks.show", ['truck' => $skate->id]) }}">{{ $skate->truck_number }}</a></td>
                                <td>{{ $skate->truck_technical_inspection_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h5>Vinjetes</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($vinjetes as $vinjete)
                            <tr>
                                <td>
                                    <a href="{{ route("trucks.show", ['truck' => $vinjete->id]) }}">
                                        {{ $vinjete->truck_number }}</a>
                                </td>
                                <td>{{ $vinjete->truck_vignette_date }}</td>
                                <td>{{ $vinjete->truck_vignette_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h5>Apdrošināšana</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($insurances as $insurance)
                            <tr>
                                <td>
                                    <a href="{{ route("trucks.show", ['truck' => $insurance->id]) }}">
                                        {{ $insurance->truck_number }}</a>
                                </td>
                                <td>{{ $insurance->truck_insurance_date }}</td>
                                <td>{{ $insurance->truck_insurance_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
        <div class="col-sm-3">  
            <div class="card">
                <div class="card-header">
                    <h5>KASKO</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($ccInsurances as $ccInsurance)
                            <tr>
                                <td>
                                    <a href="{{ route("trucks.show", ['truck' => $ccInsurance->id]) }}">
                                        {{ $ccInsurance->truck_number }}</a>
                                </td>
                                <td>{{ $ccInsurance->truck_cc_insurance_date }}</td>
                                <td>{{ $ccInsurance->truck_cc_insurance_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>
    </div>  
    <div class="row">
        
        <div class="col-sm-3">  
            <div class="card">
                <div class="card-header">
                    <h5>Transporta atļaujas</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($transportations as $transportation)
                            <tr>
                                <td>
                                    <a href="{{ route("trucks.show", ['truck' => $transportation->id]) }}">
                                        {{ $transportation->truck_number }}</a>
                                </td>
                                <td>{{ $transportation->truck_transportation_date }}</td>
                                <td>{{ $transportation->truck_transportation_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
        <div class="col-sm-3">    
            <div class="card">
                <div class="card-header">
                    <h5>Atkritumu pārvadāšanas atļaujas</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($waste as $w)
                            <tr>
                                <td>
                                    <a href="{{ route("trucks.show", ['truck' => $w->id]) }}">
                                        {{ $w->truck_number }}</a>
                                </td>
                                <td>{{ $w->truck_waste_date }}</td>
                                <td>{{ $w->truck_waste_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active">Darbinieki</a>
        </li>
    </ul>
    <br />
    <div class="row">
        <div class="col-sm-3">  
            <div class="card">
                <div class="card-header">
                    <h5>Tiesības</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($driverLicenses as $driverLicense)
                            <tr>
                                <td>
                                    <a href="{{ route("employees.show", ['employee' => $driverLicense->id]) }}">
                                        {{ $driverLicense->empl_name }} {{ $driverLicense->empl_surname }}</a>
                                </td>
                                <td>{{ $driverLicense->empl_driver_license_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>
<br />
@endsection
