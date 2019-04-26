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
 <style type="text/css">
     input[type="file"] {
    display: none;
}
.custom-file-upload {
     
    display: inline-block;
    padding: 6px 12px;
    width: 1200px;
    cursor: pointer;
}
 </style>
@endpush
@section('content')
    <section class="content">
     <div class="container-fluid">
 

            <!-- Widgets -->
   <!-- Exportable Table -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREATE VENUE
                            </h2>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="{{$addpatient->name}}" type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="file-upload" class="custom-file-upload">
    Custom Upload
</label>
<input id="file-upload" type="file"/>
                                    </div>
                                </div>
                                 <table class="table table-bordered" id="crud_table">
                                <thead>
                                    <th>Medicine Name</th>
                                    <th>MG/ML</th>
                                    <th>Dose</th>
                                    <th>Day</th>
                                    <th>Medicine Comment</th>
                                    <th><button type="button" id="add" name="add" class="btn btn-info"><i class="material-icons">
add_box
</i></button></th>
                                </thead>
                                <tbody>
                                    <tr>
                                       <td>
                                            <input type="text" name="mdname[]" class="mdname form-control" placeholder="Medicine Name">
                                        </td>
                                         <td>
                                            <input type="text" name="mgml[]" class="mgml form-control" placeholder="MG/ML">
                                        </td>
                                        <td>
                                            <input type="text" name="dose[]" class="dose form-control" placeholder="Dose">
                                        </td>
                                         <td>
                                            <input type="text" name="day[]" class="day form-control" placeholder="Day">
                                        </td>
                                        <td>
                                            <input type="text" name="mcomment[]" class="mcomment form-control" placeholder="Comment">
                                        </td>
                                        <td><button type="button" id="add" name="add" class="btn btn-danger"><i class="material-icons">
indeterminate_check_box
</i></button></td>
                                    
                                    </tr>
                                   
                                </tbody>
                            </table>
                            <br>
                            <div class="row">
                              <div class="col-md-6">
                                
                             
                               <table class="table table-bordered" id="test_table">
                              <thead>
                                <tr>
                                  <th>Disease Name</th>
                                  <th>Test Name</th>
                                   <th><button type="button" id="addd" name="addd" class="btn btn-info"><i class="material-icons">add_box</i></button></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="text" name="diseasename[]" class="disease_id form-control" placeholder="Disease Name"></td>
                                  <td><input type="text" name="tname[]" class="tname form-control" placeholder="Test Name"></td>
                                  </td>
                                        <td><button type="button" id="add" name="add" class="btn btn-danger"><i class="material-icons">indeterminate_check_box</i></button></td>
                                </tr>
                              </tbody>
                            </table>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
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
    <script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";

   html_code += "<td><input type='text' name='mdname[]' class='mdname form-control' placeholder='Medicine Type'></td>";

   html_code += "<td><input type='text' name='mgml[]' class='mgml form-control' placeholder='MG/ML'></td>";

   html_code += "<td><input type='text' name='dose[]' class='dose form-control' placeholder='dose'></td>";

   html_code += "<td><input type='text' name='day[]' class='day form-control' placeholder='Day'></td>";

   html_code += "<td><input type='text' name='mcomment[]' class='mcomment form-control' placeholder='Comment'></td>";

    

   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='text-center btn btn-danger remove'><i class='material-icons'> indeterminate_check_box</i></button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
});
</script>
<script>
$(document).ready(function(){
 var count = 1;
 $('#addd').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";



   html_code += "<td><input type='text' name='diseasename[]' class='disease_id form-control' placeholder='Disease Name'></td>";

   html_code += "<td><input type='text' name='tname[]' class='tname form-control' placeholder='Test Name'></td>";


    

   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='text-center btn btn-danger remove'><i class='material-icons'> indeterminate_check_box</i></button></td>";   
   html_code += "</tr>";  
   $('#test_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
});
</script>
    @endpush
@endsection
