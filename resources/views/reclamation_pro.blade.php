@extends('layouts.app_pro')

@section('content')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beyti</title>

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
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Local Name</th>
                    <th>Customer Name</th>
                     <th> E-mail </th>
                    <th>Subject</th>
                    <th>File</th>
                    <th>Description</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($reclamations as $rec)
                  @if (($rec->id_user == Auth::user()->id) && ($rec->id_loc == $rec->id ) )
                  <tr>
                    <td>{{ $rec->name_loc }}</td>
                   <td> {{ $rec->name }} </td>
                    <td> {{ $rec->email }} </td>
                    <td>{{ $rec->subject }}</td>

                    <td><img src="\images\uploads\2020\04\{{ $rec->content}}"/></td>
                    <td>{{ $rec->description }}</td>
                  </tr>
                  @endif
                @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th> Local Name</th>
                    <th>Customer Name</th>
                      <th> E-mail </th>
                    <th>Subject</th>
                    <th>File</th>
                    <th>Description</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>








<div class="modal modal-danger fade" id="local" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <h4 class="modal-title text-center" id="myModalLabely"></h4>

   <form id="frmloc" action="{{action('TestController@destroy', -1)}}" method="post">



          @method('DELETE')
          @csrf
       <div class ="modal-body">

  <!-- Default box -->

        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
               </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b></b></h2>
                      <p class="text-muted text-sm"><b>About: </b>  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>

              </div>
<input type="hidden" name="loc" id="loc_id" value="">

</div>


<div class="modal-footer">

<div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>

</div>

 </form>
</div>
</div>

</div>
</div>

<!-- --------------------------------------------------------------------- -->
























<div class="modal modal-danger fade" id="locataire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <h4 class="modal-title text-center" id="myModalLabely"></h4>

   <form id="frmloct" action="" method="post">



          @method('DELETE')
          @csrf
       <div class ="modal-body">

  <!-- Default box -->

        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>

              </div>
<input type="hidden" name="loct" id="loct_id" value="">

</div>


<div class="modal-footer">

<div class="card-footer">
                  <div class="text-right">
                    <a href="{{url('msg')}}" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="{{url('msg')}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>

</div>

 </form>
</div>
</div>

</div>
</div>




@endsection



<!-- ----------------------------------------------------------------------------
 -->

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
      "autoWidth": true,
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
    jQuery('.loc-cl').on('click', function(){
      var url = jQuery('#frmloc').attr('action').replace('-1', '') + jQuery(this).data('locid');
      jQuery('#frmloc').attr('action', url);
      return true;
    });
    jQuery('#local').on('hidden.bs.modal', function () {
      var href = jQuery('#btn-close-del').data('href');
      jQuery('#frmloc').attr('action', href);
    });

    jQuery('.loct-cl').on('click', function(){
      var url = jQuery('#frmloct').attr('action').replace('-1', '') + jQuery(this).data('lotcid');
      jQuery('#frmloct').attr('action', url);
      return true;
    });
    jQuery('#locataire').on('hidden.bs.modal', function () {
      var href = jQuery('#btn-close-del').data('href');
      jQuery('#frmloct').attr('action', href);
    });
    });

</script>
@endpush












