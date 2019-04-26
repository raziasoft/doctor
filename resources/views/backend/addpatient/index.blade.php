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
                                 <mark class="btn btn-primary">All Patient</mark> <mark class="btn btn-success">{{$addpatient->count('id')}}</mark>
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
                            <div class="table-responsive">
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
                                      @foreach($addpatient as $key => $row)
                                        <tr>
                                             @if($row->patient_status == 1)
                                            <td>{{$key + 1}}</td>
                                            <td>{{$row->name}}</td>
                                            <td class="text-center">
                                                <button class="btn-primary btn">active</button>
                                            </td>
                                            <td><button class="btn btn-danger">1</button></td>
                                            <td>{{$row->phone}}</td>
                                            <td>{{asset('backend/addpatient/image/'.$row->file)}}</td>
                                            <td class="text text-center">
                                                <a href="{{route('addpatient.show',$row->id)}}" class="btn btn-primary"><i class="material-icons">visibility</i></a>
                                                <a href="" class="btn btn-info"><i class="material-icons">mode_edit</i></a>
                                                <a href="" class="btn btn-danger"><i class="material-icons">delete</i>
                                                </a>
                                                <a href="{{route('addpatient.edit',$row->id)}}" class="btn btn-primary"><i class="material-icons">mode_edit</i></a>
                                            </td>
                                        </tr>    
                                    @else
                                    @endif

  
                                       
                                    </tbody>
                                     @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
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
    @endpush
@endsection
