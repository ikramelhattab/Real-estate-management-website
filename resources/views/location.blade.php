@extends('layouts.app')
@section('content')


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <script>

</script>
</head>
 <div class="row">
    <div class="col-2">

<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
  <img src="@if( !filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL)){{ Voyager::image( Auth::user()->avatar ) }}@else{{ Auth::user()->avatar }}@endif"
             class="avatar"
             style="border-radius:50%; width:60px; height:60px; border:5px solid #fff;"
             alt="{{ Auth::user()->name }} avatar">        </div>
        <div class="info">
          <a href="http://127.0.0.1:8000/admin/profile" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                         <li class="nav-item">

            <a href="{{url('location')}}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                  My locals

              </p>
            </a>
</li>
          <li class="nav-item">
            <a href="{{url('list_dem')}}" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                    Requests

                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('reclamation_loc')}}" class="nav-link">
              <i class="nav-icon fas fa-exclamation"></i>
              <p>
                Complaints
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="{{ url('/fact_loc') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Invoices              </p>

              </p>
            </a>

          </li>

 <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-angle-right"></i>
              <p>
                Change User

              </p>
            </a>

          </li>
            </ul>




      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</div>


<!-- End Page Head -->
        <div class="col-10">


  <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <div class="card-body">

    <table id="example2" class="table table-bordered table-striped">

                <thead>
                  <tr role="row">
                            <th> Local Name </th>
                             <th> Start Date </th>
                            <th> End Date</th>
                             <th>Amount(TND)</th>



                        </tr>
                </thead>
                                <tbody>

                              @foreach($loc as $l)
                     @if (( Auth::user()->id == $l->id_user) && ($l->status == 1 ) )


                                 <tr>

                                    <td>{{$l->name_loc}} </td>
                                    <td> {{$l->dateDeb}} </td>
                                    <td> {{$l->datefin}} </td>
                                     <td name="id_local">{{$l->montant}} </td>

   </tr>
                                       @endif

                                    @endforeach

</tbody>
                <tfoot>
                 <tr>         <th> Local Name </th>
                             <th> Start Date </th>
                            <th> End Date</th>
                             <th>Amount(TND)</th>

                  </tr>

                </tfoot>
              </table>

</div>
</div>
</div>
</div>


<br>
<br>
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <h4 class="modal-title text-center" id="myModalLabely">Confirm Request Deletion</h4>

   <form id="frmdlt" action="{{action('FactureController@destroy', -1)}}" method="post">



          @method('DELETE')
          @csrf
       <div class ="modal-body">

  <p class="text-center">
  Are you sure you want to delete this Request?
  </p>
<input type="hidden" name="clt" id="clt_id" value="">

</div>


<div class="modal-footer">

<button id="btn-close-del" type="button" data-href="{{action('FactureController@destroy', -1)}}" class="btn btn-success" data-dismiss="modal" >Cancel</button>

<button type="submit" class="btn btn-warning">Delete</button>

</div>

 </form>
</div>
</div>

</div>
</div>

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
@endsection
