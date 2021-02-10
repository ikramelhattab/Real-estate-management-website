
@extends('layouts.app_pro')
@section('content')


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BonGest| Compteur</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>




  <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
                <a href="{{action('CompteurController@create')}}" class="btn btn-primary glyphicon glyphicon-plus">Add</a>

              </div>
              <div class="card-body">

    <table id="example2" class="table table-bordered table-striped">

                <thead>
                  <tr role="row">
                            <th>Date </th>
                            <th>Counter Number </th>
                            <th>Counter Type</th>
                            <th>Local Name</th>
                            <th>Photo</th>
                            <th>Action</th>
                   </tr>
                </thead>
                                <tbody>

                      @foreach($compteurs as $c)

                     @if ( $c->id_user == (Auth::user()->id))


                    <tr>
                                  <td> {{ $c->date }} </td>
                                  <td> {{ $c->num_compteur }} </td>
                                <td> {{ $c->name_loc}} </td>

                                    <td> {{ $c->type}} </td>
                           <td><img src="\images\uploads\2020\04\{{ $c->photo}}"/></td>

   <td>




<a href="{{action('CompteurController@edit',$c->id)}}" class="btn btn-warning glyphicon glyphicon-edit"> Edit</a>


        <button type="button" class="delete-modal btn btn-danger dlte-cl" data-toggle="modal" data-target="#delete" data-cltid="{{$c->id}}">

            <span class="glyphicon glyphicon-trash"></span> Delete </button>
 </td>
   </tr>
   @endif
   @endforeach
</tbody>
                <tfoot>
                 <tr>       <th>Date </th>
                            <th>Counter Number </th>
                            <th>Counter Type</th>
                            <th>Local Name</th>
                            <th>Photo</th>
                            <th>Action</th>



                  </tr>

                </tfoot>
              </table>

</div>
</div>









<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <h4 class="modal-title text-center" id="myModalLabely">Confirm Request Deletion</h4>

   <form id="frmdlt" action="{{action('CompteurController@destroy', -1)}}" method="post">



          @method('DELETE')
          @csrf
       <div class ="modal-body">

  <p class="text-center">
  Are you sure you want to delete this Request?
  </p>
<input type="hidden" name="clt" id="clt_id" value="">

</div>


<div class="modal-footer">

<button id="btn-close-del" type="button" data-href="{{action('CompteurController@destroy', -1)}}" class="btn btn-success" data-dismiss="modal" >Cancel</button>

<button type="submit" class="btn btn-warning">Delete</button>

</div>

 </form>
</div>
</div>

</div>
</div>
@endsection

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
  });
</script>



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
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    jQuery('#local').on('hidden.bs.modal', function () {
      var href = jQuery('#btn-close-del').data('href');
      jQuery('#frmdlt').attr('action', href);
    });
    jQuery('#locataire').on('hidden.bs.modal', function () {
      var href = jQuery('#btn-close-del').data('href');
      jQuery('#frmdlt').attr('action', href);
    });
    });

</script>
@endpush
