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
.file {
  position: relative;
  display: inline-block;
  cursor: pointer;
  height: 2.5rem;
}
.file input {
  min-width: 24rem;
  margin: 0;
  filter: alpha(opacity=0);
  opacity: 0;
}
.file-custom {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 5;
  height: 2.5rem;
  padding: .5rem 1rem;
  line-height: 1.5;
  color: #555;
  background-color: #fff;
  border: .075rem solid #ddd;
  border-radius: .25rem;
  box-shadow: inset 0 .2rem .4rem rgba(0,0,0,.05);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.file-custom:after {
  content: "Choose file...";
}
.file-custom:before {
  position: absolute;
  top: -.075rem;
  right: -.075rem;
  bottom: -.075rem;
  z-index: 6;
  display: block;
  content: "Browse";
  height: 2.5rem;
  padding: .5rem 1rem;
  line-height: 1.5;
  color: #555;
  background-color: #eee;
  border: .075rem solid #ddd;
  border-radius: 0 .25rem .25rem 0;
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
                                CREATE PATIENT
                            </h2>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{route('addpatient.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="col-md-5">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" name="name" required>
                                        <label class="form-label">Patient Name</label>

                                         @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                                        <label class="form-label">Patient Phone</label>

                                         @if ($errors->has('phone'))
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
                                        <input type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" value="{{ old('gender') }}" name="gender" required>
                                        <label class="form-label">Gender</label>

                                         @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row clearfix">
                                <div class="col-md-5">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ old('district') }}" name="district" required>
                                        <label class="form-label">District</label>

                                         @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control{{ $errors->has('problem') ? ' is-invalid' : '' }}" value="{{ old('problem') }}" name="problem" required>
                                        <label class="form-label">Problem</label>

                                         @if ($errors->has('problem'))
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
                                        <input type="number" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"  value="{{ old('age') }}" name="age" required>
                                        <label class="form-label">Age</label>

                                         @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{  Toastr::Error('Venue Table already take this name' , 'Error') }}</strong>
                                    </span>
                                      @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <label class="file">
                       <input type="file" id="file" aria-label="File browser example" name="file">
                     <span class="file-custom"></span>
                     </label>
                            </div>
                            
                        </div>
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
    @endpush
@endsection
