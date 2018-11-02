@extends('voyager::master')
@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-dollar"></i> Creditos a Pagar
        </h1>
        
          
      
                
    
    </div>
@stop
@section('content')
<div class="page-content browse container-fluid">
	<div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
						<div class="table-responsive">
							<table id="pagos" class="table table-hover">
							    <thead>
							      <tr>
							        <th>Monto</th>
							        <th>Valorcuota</th>
							        <th>Periodo pagos</th>
							        <th>Cliente</th>
							        <th>Estado</th>
							        <th>Cuotas pagadas</th>
							        <th>Action</th>
							      </tr>
							    </thead>
							    <tbody>							      
							      @foreach($creditos as $credito)							    
							      <tr>
							        <td>{{$credito['monto']}}</td>
							        <td>{{$credito['valorcuota']}}</td>							        
							        <td>{{$credito['periodopagos']}}</td>
							         <td>{{$credito['customer']->nombre }}</td>
							        <td>{{$credito['estado']}}</td>
							        <td>{{$credito['cuotas_pagadas']}}</td>
							        <td><a href="" class="btn btn-warning">Pagar</a></td>
							        
							      </tr>
							      @endforeach
							    </tbody>
							  </table>
						</div>
                    </div>
                </div>
            </div>
        </div>
</div>



@endsection

@section('javascript')

    <script>
        $(document).ready(function () {
            
                $('#pagos').DataTable({!! json_encode(
                    array_merge([
                        "order" => [],
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [['targets' => -1, 'searchable' =>  false, 'orderable' => false]],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});
        
        });
    </script>
    @stop