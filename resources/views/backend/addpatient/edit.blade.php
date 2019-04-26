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
        <link rel="stylesheet" type="text/css" href=" https://printjs-4de6.kxcdn.com/print.min.css">
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
                               <mark class="btn btn-primary">{{$addpatient->name}}</mark> <mark class="btn btn-danger">All Prescription </mark> <mark class="btn btn-success">{{$prescription->count('id')}}</mark>
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

                           
                                  @foreach($addpatient->prescription as $key=>  $addd)
                                  <!--<div class="table-responsive" >
                                 <div class="col-md-6" id="{{$addd->id}}" >
                                         <h3>Dr. John Day</h3>
                                             <h5>MBBS , DDB , FRSH</h5>
                                             <strong>Skin , Allergy & V.D Specialist</strong>
                                             <p>Assistant Professor</p>
                                             <strong>196 Ellis Avenue , Main Road | Nanasree Dhaka -1215</strong>
                                    </div>
                                    <div class="col-md-6" >
                                        <strong>Dhaka Medical Hospital</strong>
                                             <p>1911 Clement Street Atlanta , GA 30303 , Dhaka-1220</p>
                                             <p>01788889804</p>
                                    </div> -->
                                  


                                 <table class="table table-bordered table-striped table-hover" id="{{$addd->id}}">

                                    <thead>
                                        <tr>
                                            <th colspan="4">
                                                  <h3>Dr. John Day</h3>
                                             <h5>MBBS , DDB , FRSH</h5>
                                             <strong>Skin , Allergy & V.D Specialist</strong>
                                             <p>Assistant Professor</p>
                                             <strong>196 Ellis Avenue , Main Road | Nanasree Dhaka -1215</strong>
                                            </th>
                                            <th colspan="5">
                                                <strong>Dhaka Medical Hospital</strong>
                                             <p>1911 Clement Street Atlanta , GA 30303 , Dhaka-1220</p>
                                             <p>01788889804</p>
                                            </th>
                                        </tr>
                                        <tr class="text text-primary">
                                            <th>Patient name</th>
                                            <th>Phone</th>
                                            <th>Advice</th>
                                            <th>Medicine</th>
                                            <th>Test</th>
                                            <th>Medicine</th>
                                            <th>Test</th>
                                            <th>Test</th>
                                             <th class="text text-center"><button class="btn btn-info"onclick="printJS('{{$addd->id}}', 'html')">Print</button></th>
                                        </tr>
                                    </thead>
                                                                        <tbody>

                                     <td>{{$addd->addpatient_name}}</td>
                                     <td>{{$addd->addpatient_phone}}</td>

                                     <td>
                                          <table class="table table-bordered">
                                                     <thead>
                                                       <tr>
                                                         <th>Id</th>
                                                         <th>Advice Name</th>
                                                       </tr>
                                                     </thead>
                                                     <tbody>
                                                        @foreach($addd->patientmedicine as $key =>  $as)
                                                       <tr>
                                                         <td>{{$as->type}}</td>
                                                         <td></td>
                                                       </tr> 
                                                       @endforeach
                                                     </tbody>
                                           
                                                   </table>
                                     </td>
                                     <td>
                                                 <table class="table table-bordered">
                                                     <thead>
                                                       <tr>
                                                         <th>Id</th>
                                                         <th>Advice Name</th>
                                                       </tr>
                                                     </thead>
                                                     <tbody>
                                                         @foreach($addd->patienttest as $key =>  $as)
                                                       <tr>
                                                         <td>{{$as->diseasename}}</td>
                                                         <td>{{$as->tname}}</td>
                                                       </tr>
                                                        @endforeach
                                                     </tbody>
                                                      
                                                   </table>
                                     </td>
                                     <td>
                                                 <table class="table table-bordered">
                                                     <thead>
                                                       <tr>
                                                         <th>Advice</th>
                                                       </tr>
                                                     </thead>
                                                     <tbody>
                                                        @foreach($addd->patientadvice as $key =>  $as)
                                                       <tr>
                                                         <td>{{$as->advice}}</td>
                                                       </tr>
                                                        @endforeach
                                                     </tbody>
                                                   </table>
                                     </td>
                                     <!-- this is advice table -->
                                        <td>
                                            {{$addd->blood}}
                                        </td>
                                        <td>
                                            {{$addd->cc}}
                                        </td>
                                        <td>
                                            {{$addd->weight}}
                                        </td>
                                     <!-- end advice -->
                                    </tbody>
                                </table>
                                 </div>
                                @endforeach

                              
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
    <script type="text/javascript" src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
 
    @endpush
@endsection
