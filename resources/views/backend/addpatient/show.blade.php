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
                           <form id="form_validation" method="POST" action="{{route('prescription.store')}}">
                            {{csrf_field()}}
                               <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line disabled">
                                            <input value="{{$addpatient->id}}" type="text" class="form-control" name="addpatient_id" placeholder="Statu Focused"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line disabled">
                                            <input value="{{$addpatient->name}}" type="text" class="form-control" name="addpatient_name" placeholder="Statu Focused"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line disabled">
                                            <input value="{{$addpatient->phone}}" type="text" class="form-control" name="addpatient_phone" placeholder="Disabled" hidden=""  />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- patient all informatio -->
                            <div class="row clearfix">
                                <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('blood group') ? ' is-invalid' : '' }}" value="{{ old('blood group') }}" name="blood" required>
                                        <label class="form-label"> blood group</label>

                                         @if ($errors->has('blood group'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this blood group' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('c/c') ? ' is-invalid' : '' }}" name="cc" value="{{ old('cc') }}" required>
                                        <label class="form-label">Patient cc</label>

                                         @if ($errors->has('cc'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" value="{{ old('weight') }}" name="weight" required>
                                        <label class="form-label">weight</label>

                                         @if ($errors->has('weight'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('bp') ? ' is-invalid' : '' }}" value="{{ old('bp') }}" name="bp" required>
                                        <label class="form-label">b/p</label>

                                         @if ($errors->has('bp'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('ex') ? ' is-invalid' : '' }}" value="{{ old('ex') }}" name="ex" required>
                                        <label class="form-label">ex</label>

                                         @if ($errors->has('ex'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('pd') ? ' is-invalid' : '' }}" value="{{ old('pd') }}" name="pd" required>
                                        <label class="form-label">pd</label>

                                         @if ($errors->has('pd'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--end patient information-->
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
                                  <th>Type</th>
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
                                            <input type="text" name="type[]" class="type form-control" placeholder="Medicine Type">
                                        </td>
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
                            <span class="text text-center">
                               <button  class="btn btn-primary  waves-effect" type="submit">SUBMIT</button>
                              </div>
                            </span>
                               
                               <!-- this is advice form -->
                              <div class="col-md-6">
                            <table class="table table-bordered" id="advice_table">
                              <thead>
                                <tr>
                                  <th>Advice</th>
                                   <th class="text-right"><button type="button" id="adddd" name="adddd" class="btn btn-info"><i class="material-icons">add_box</i></button></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="text-center">
                                  <td><input type="text" name="advice[]" class="disease_id form-control" placeholder="Disease Name"></td>
                              <td class="text-right"><button type="button" id="add" name="add" class="btn btn-danger"><i class="material-icons">indeterminate_check_box</i></button></td>
                                </tr>
                              </tbody>
                            </table>
                              </div>
                              </div>
                               

                                <!-- end this is advice form -->
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


    html_code += "<td><input type='text' name='type[]' class='type form-control' placeholder='Medicine Type'></td>";

   html_code += "<td><input type='text' name='mdname[]' class='mdname form-control' placeholder='Medicine name'></td>";

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

<!-- advice -->
<script>
$(document).ready(function(){
 var count = 1;
 $('#adddd').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";



   html_code += "<td><input type='text' name='advice[]' class='disease_id form-control' placeholder='Advice Name'></td>";

   html_code += "<td class='text text-right'><button type='button' name='remove' data-row='row"+count+"' class='text-center btn btn-danger remove'><i class='material-icons'> indeterminate_check_box</i></button></td>";   
   html_code += "</tr>";  
   $('#advice_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
});
</script>
<!-- end advice -->
    @endpush
@endsection
