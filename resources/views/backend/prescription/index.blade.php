@extends('backend.app')
@section('title','venue')
@push('css')
  <!-- JQuery DataTable Css -->

    <!-- Bootstrap Core Css -->
    <link href="{{asset('backend/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('backend/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('backend/css/themes/all-themes.css')}}" rel="stylesheet" />
@endpush
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
   <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <mark class="btn btn-primary">All Patient</mark> <mark class="btn btn-success">{{$prescription->count('id')}}</mark>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                         <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <tr>
                                             <th>Serial</th>
                                            <th>Venue Name</th>
                                            <th>Status</th>
                                            <th>Create_at</th>
                                            <th>Updataedt_at</th>
                                            <th class="text text-center">Action</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                            <th>Serial</th>
                                            <th>Venue Name</th>
                                            <th>Status</th>
                                            <th>Create_at</th>
                                            <th>Updataedt_at</th>

                                            <th class="text text-center">Action</th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($prescription as $key => $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                             <td><a href="{{route('prescription.show',$row->addpatient_id)}}" class="btn btn-primary">{{$row->addpatient_id}}</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
<!-- 
                                    <table id="table" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>

                                        <tr>
                                            <th>Serial</th>
                                            <th>Venue Name</th>
                                            <th>Create_at</th>
                                            <th>Updataedt_at</th>
                                            <th>Action</th>
                                             <th>Total : </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Venue Name</th>
                                            <th>Create_at</th>
                                            <th class="">cc</th>
                                            <th>Action</th>
                                            <th>
                                                Total : <span id="val"></span>
                                            </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         @foreach($prescription as $key => $row)
            <tr>
                <td>{{$key + 1 }}</td>
                <td>{{$row->addpatient_id}}</td>
                <td class="cc">{{$row->cc}}</td>
            </tr>
            @endforeach
                                    </tbody>
                                </table>

<table id="table" class="table table-bordered table-striped table-hover dataTable js-exportable">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Value</th>
            </tr>
              @foreach($prescription as $key => $row)
            <tr>
                <td>{{$key + 1 }}</td>
                <td>{{$row->addpatient_id}}</td>
                <td class="cc">{{$row->cc}}</td>
            </tr>
            @endforeach
           
        </table>
        <span id="val"></span>
                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- #END# Exportable Table -->
        </div>
    </section>
    @endsection
    @push('js')

    <!-- Jquery DataTable Plugin Js -->
        <script src="{{asset('backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('backend/js/admin.js')}}"></script>
    <script src="{{asset('backend/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('backend/js/demo.js')}}"></script>

    <script type="text/javascript">


          $('tbody').delegate('.cc' , 'keyup' , function(){
  var tr = $(this).parent().parent();
  var dose = tr.find('.cc').val();
  //var day = tr.find('.day').val();
  var mcomment = dose;
  tr.find('.mcomment').val(mcomment);
  total();
});

  function total(){
    var total = 0;
    $('.mcomment').each(function(i,e){
     var mcomment = $(this).val()-0
     total +=mcomment;
    });
    $('.total').html(total);
  }
    </script>

          <script>
            
            var table = document.getElementById("table"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
            console.log(sumVal);
            
        </script>
    @endpush

