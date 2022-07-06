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
               
                <a class="btn btn-primary" href="{{ route('trucks.create') }}">
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
            <table class="table table-bordered" id="trucksTable">
                <thead>
                    <tr>
                        <th></th><th>Numurs</th><th>Tips</th><th>Ražotājs</th><th>Modelis</th>
                        <th>Gads</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>       
</div>
@endsection

@section('js')
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#trucksTable').DataTable({
                dom: '<"row"<"col"B><"col"f>><"tabula"rt><"row"<"col"i><"col"l><"col"p>>',
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-primary'
                    },
                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-primary'
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-primary',
                        orientation: 'Landscape',
                        customize: function(doc) {
                            doc.content[1].table.widths =
                                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                            doc.pageMargins = [20, 20, 20, 20];
                        }
                    },
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/lv.json'
                },
                "lengthChange": true,
                lengthMenu: [10, 20, 50, 100],
            });
            

        });
    </script>
@stop
