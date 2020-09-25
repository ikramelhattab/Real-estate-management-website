@extends('layouts.app_pro')

@section('content')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>

<!-- .compare-properties -->
 <div class="card">
<div class="card-header">
                <h3 class="card-title"></h3>
                <a href="" class=""></a>

              </div>
                            <div class="card-body">

    <table id="example2" class="table table-bordered table-striped" content="{{ csrf_token() }}">

                <thead>
                  <tr role="row">
                            <th >Date </th>
                            <th> Name </th>
                            <th> Name Client </th>

                            <th>Date Debut</th>
                            <th> Date Fin</th>
                             <th> Status </th>

                           <th> Actions </th>



                        </tr>
                          </thead>

                                <tbody>

                                 @foreach($demandes as $d)

                                 <tr>
                                    <td> {{ $d ->dateDemande }} </td>
                                    <td> {{ $d ->name_loc }} </td>

                                    <td> {{ $d ->name }} </td>
                                    <td> {{ $d ->dateDeb }} </td>
                                    <td> {{ $d ->datefin }} </td>


   <td>


@if($d ->status == 1)
<a href="javascript:void(0)" class="updateProductStatus" id="product={{$d->id}}" id_locale="{{$d->id}}"> Accepted</a>
@else
<a href="javascript:void(0)" class="updateProductStatus" id="product={{$d->id}}" id_locale="{{$d->id}}"> Waiting</a>
@endif
</td>
   <td>


        <button type="button" class="delete-modal btn btn-danger dlte-cl" data-toggle="modal" data-target="#delete" data-cltid="{{$d->id}}">

            <span class="glyphicon glyphicon-trash"></span> Delete </button>
 </td>
   </tr>
   @endforeach

</tbody>
                <tfoot>
                 <tr>      <th>Date  </th>
                            <th> Name </th>
                           <th> Name Client </th>
                            <th>Date Debut</th>
                            <th> Date Fin</th>
                            <th> Status </th>

                           <th> Actions </th>


                  </tr>

                </tfoot>
              </table>




</div>
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <h4 class="modal-title text-center" id="myModalLabely">Confirm Request Deletion</h4>

   <form id="frmdlt" action="{{action('TestController@destroy', -1)}}" method="post">



          @method('DELETE')
          @csrf
       <div class ="modal-body">

  <p class="text-center">
  Are you sure you want to delete this Request?
  </p>
<input type="hidden" name="clt" id="clt_id" value="">

</div>


<div class="modal-footer">

<button id="btn-close-del" type="button" data-href="{{action('TestController@destroy', -1)}}" class="btn btn-success" data-dismiss="modal" >Cancel</button>

<button type="submit" class="btn btn-warning">Delete</button>

</div>

 </form>
</div>
</div>

</div>
</div>
</div>
@endsection




@push('jscripts')
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
<script>
   jQuery(document).ready(function () {
    jQuery('#list_clients').dataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
     jQuery('.dlte-cl').on('click', function(){
      var url = jQuery('#frmdlt').attr('action').replace('-1', '') + jQuery(this).data('cltid');
      jQuery('#frmdlt').attr('action', url);
      return true;
    });
    jQuery('#delete').on('hidden.bs.modal', function () {
      var href = jQuery('#btn-close-del').data('href');
      jQuery('#frmdlt').attr('action', href);
    });

jQuery(document).ready(function () {
$(".updateProductStatus").click(function(){
var status =  $(this).text();
var id_locale =  $(this).attr('id_locale');

$.ajax ({
type:'post',
url:'valide',

data : {status:status,id_locale:id_locale},
success:function(resp){
    if(resp['status']==0){
        $("#product-"+id_locale).html("<a href='javascript:void(0)' class='updateProductStatus' id='product={{$d->id}}' id_locale='{{$d->id}}'> Waiting </a>")
    }
    else if(resp['status']==1){
       $("#product-"+id_locale).html("<a href='javascript:void(0)' class='updateProductStatus' id='product={{$d->id}}' id_locale='{{$d->id}}'> Accepted</a>")
}
},error:function(){
    alert("Error");
}

  });

  });

 });
  $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }
});
  });



    });
</script>
@endpush

<script src = "{{asset('js/jquery/jquery.dataTables.min.js')}}" defer ></script>


<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
     jQuery('.dlte-cl').on('click', function(){
      var url = jQuery('#frmdlt').attr('action').replace('-1', '') + jQuery(this).data('cltid');
      jQuery('#frmdlt').attr('action', url);
      return true;
    });
    jQuery('#delete').on('hidden.bs.modal', function () {
      var href = jQuery('#btn-close-del').data('href');
      jQuery('#frmdlt').attr('action', href);
    });
    jQuery(document).ready(function () {
$(".updateProductStatus").click(function(){
var status =  $(this).text();
var id_locale =  $(this).attr('id_locale');

$.ajax ({
type:'post',
url:'valide',

data : {status:status,id_locale:id_locale},
success:function(resp){
    if(resp['status']==0){
        $("#product-"+id_locale).html("<a href='javascript:void(0)' class='updateProductStatus' id='product={{$d->id}}' id_locale='{{$d->id}}'> Waiting </a>")
    }
    else if(resp['status']==1){
       $("#product-"+id_locale).html("<a href='javascript:void(0)' class='updateProductStatus' id='product={{$d->id}}' id_locale='{{$d->id}}'> Accepted</a>")
}
},error:function(){
    alert("Error");
}

  });

  });

 });
  $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }
});
  });
</script>
