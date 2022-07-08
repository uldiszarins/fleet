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
                            <tr @if($skate->over_date == 1) class="table-danger" @endif>
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
                            <tr @if($vinjete->over_date == 1) class="table-danger" @endif>
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
                            <tr @if($insurance->over_date == 1) class="table-danger" @endif>
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
                            <tr @if($ccInsurance->over_date == 1) class="table-danger" @endif>
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
                            <tr @if($transportation->over_date == 1) class="table-danger" @endif>
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
                            <tr @if($w->over_date == 1) class="table-danger" @endif>
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
                    <h5>Vadītāja apliecība</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($driverLicenses as $driverLicense)
                            <tr @if($driverLicense->over_date == 1) class="table-danger" @endif>
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
        <div class="col-sm-3">  
            <div class="card">
                <div class="card-header">
                    <h5>Medicīnas izziņa</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($healths as $health)
                            <tr @if($health->over_date == 1) class="table-danger" @endif>
                                <td>
                                    <a href="{{ route("employees.show", ['employee' => $health->id]) }}">
                                        {{ $health->empl_name }} {{ $health->empl_surname }}</a>
                                </td>
                                <td>{{ $health->empl_health_date }}</td>
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
                            @foreach($emplInsurances as $emplInsurance)
                            <tr @if($emplInsurance->over_date == 1) class="table-danger" @endif>
                                <td>
                                    <a href="{{ route("employees.show", ['employee' => $emplInsurance->id]) }}">
                                        {{ $emplInsurance->empl_name }} {{ $emplInsurance->empl_surname }}</a>
                                </td>
                                <td>{{ $emplInsurance->empl_insurance_date }}</td>
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
                    <h5>Darba drošība</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($workSafeties as $workSafety)
                            <tr @if($workSafety->over_date == 1) class="table-danger" @endif>
                                <td>
                                    <a href="{{ route("employees.show", ['employee' => $workSafety->id]) }}">
                                        {{ $workSafety->empl_name }} {{ $workSafety->empl_surname }}</a>
                                </td>
                                <td>{{ $workSafety->empl_work_safety_date }}</td>
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

@section('js')
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
@stop
