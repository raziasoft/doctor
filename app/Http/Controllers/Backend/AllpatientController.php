<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Backend\Addpatient;
use DB;
class AllpatientController extends Controller
{
    public function index()
    {
    	$allpatient= Addpatient::all();
    	 return view('backend.addpatient.allpatient',compact('allpatient'));
    }


        public function unactive_category($id)
    {
      DB::table('addpatients')
      ->where('id',$id)
      ->update(['patient_status' => '0']);
      return redirect('dashboard/allpatient');
    }
      public function active_category($id)
    {
      DB::table('addpatients')
      ->where('id',$id)
      ->update(['patient_status' => '1']);
      return redirect('dashboard/allpatient');
    }
}
