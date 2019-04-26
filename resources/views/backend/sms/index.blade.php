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
<link href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
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
                                EXPORTABLE TABLE
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
                          <h4>Enter Your message for client</h4>
                          <textarea rows="5" class="form-control" placeholder="Please Write Something..."></textarea>
                          <hr>
                          <form>
                              <table class="table table-bordered">
                                <input type="checkbox" id="select-all" class="chk-col-orange"  />
                                <label for="select-all"></label>
                                  <thead>

                                      <th>Check</th>
                                      <th>ID</th>
                                      <th>Name</th>
                                      <th>Phone</th>
                                  </thead>
                                  <tbody>
                                    @foreach($sms as $sm)
                                    <tr>
                                      <td>
                                         <input type="checkbox" id="{{$sm->id}}" class="chk-col-orange" onClick="toggle(this)"  />
                                <label for="{{$sm->id}}"></label>
                               
                                      </td>
                                      <td>{{$sm->id}}</td>
                                      <td>{{$sm->name}}</td>
                                      <td>{{$sm->phone}}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                               <button class="btn btn-primary">Send Message</button>
                          </form>
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
 
    <script src="{{asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('backend/js/admin.js')}}"></script>
    <script src="{{asset('backend/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('backend/js/demo.js')}}"></script>


    <script language="JavaScript">
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});
</script>


    @endpush
@endsection
