@extends('partials.maincontainer')
@section('content')
<br/>
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Estatus</th>
        <th>Opciones</th>
    </tr>
    </thead>

</table>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/cr-1.5.3/fc-3.3.2/fh-3.1.8/kt-2.6.0/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.1/datatables.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function(){
        $('#example').DataTable({
            responsive: true,

            "processing" : true,
            "serverSide" : true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'print',
                    text: 'Imprimir',
                    autoPrint: true,
                    className:'btn btn-primary',
                    exportOptions: {
                        columns: [ 0, 1,2,3]
                    },
                    title: "Reporte de pedidos",
                },
                {
                    extend: 'excel',
                    text: 'Descargar a Excel',
                    className:'btn btn-primary',
                    exportOptions: {
                        columns: [ 0, 1,2,3]
                    },
                    title: "Reporte de pedidos",
                }

            ],
            "ajax" : "{{ url('/') }}/ajax/orders/getdata",
            "columns" : [
                {"data" : "id"},
                {"data" : "id"},
                {"data" : "client"},
                //Estado
                {
                    "data" :  "client",
                    "render": function ( data, type, full, meta ) {
                        var returnString = '';


                        if(full.status_id != null){
                            if(full.status_id === 0){
                                returnString =  "<span class='badge badge-warning'> Pendiente</span>";
                            }else if(full.status_id===1){
                                returnString =  "<span class='badge badge-success'> Entregado</span>";
                            }
                            else{
                                returnString =  "<span class='badge badge-danger'> Cancelado</span>";
                            }
                            return returnString;
                        }else{
                            returnString = "<span class='badge badge-secondary'>Desconocido</span>";
                            return returnString;
                        }

                    }
                },

                {
                    "data" :  "client",
                    "render": function ( data, type, full, meta ) {
                        var returnString = "<a class='btn btn-primary' href='{{ url('/')}}/app/order/"+full.id+"'>Detalles</a>";

                        return returnString;

                    }
                },



            ],
            language: {
                "lengthMenu": "Mostrar _MENU_ registros por pagina &nbsp;&nbsp;&nbsp;",
                "zeroRecords": "No se encuentra ningun registro",
                "info": "Pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros",
                "infoFiltered": "(buscando entre _MAX_ registros)",
                "search":         "Filtrar Registros : &nbsp",
                "processing" : "Cargando...",
                paginate: {
                    first:      "Primera Pagina",
                    previous:   "Anterior",
                    next:       "Siguiente",
                    last:       "Ultima"
                },

            },
            "order": [[ 0, "desc" ]]
        })
    });

</script>


@endsection

