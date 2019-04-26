<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Backend\Addpatient;
use App\Backend\Prescription;
use App\Backend\PatientMedicine;
use App\Backend\PatientTest;
use App\Backend\PatientAdvice;
use DB;
class AddpatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addpatient = Addpatient::all();
        return view('backend.addpatient.index',compact('addpatient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.addpatient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required|unique:addpatients',
            'gender' => 'required',
            'district' => 'required',
            'problem' => 'required',
            'age' => 'required',
            'file' => 'required|mimes:jpeg,bmp,png,jpg',

        ]);

        $image = $request->file('file');
        $slug = str_slug($request->name);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check addpatient dir is exists
            /*if (!Storage::disk('public')->exists('addpatient'))
            {
                Storage::disk('public')->makeDirectory('addpatient');
            }
//            resize image for addpatient and upload
            $addpatient = Image::make($image)->resize(1600,479)->save('image');
            Storage::disk('public')->put('addpatient/'.$imagename,$addpatient);

            //            check addpatient slider dir is exists
            if (!Storage::disk('public')->exists('addpatient/slider'))
            {
                Storage::disk('public')->makeDirectory('addpatient/slider');
            }
            */
            //            resize image for addpatient slider and upload
            $slider = Image::make($image)->resize(100,100)->save('image');
            Storage::disk('public')->put('addpatient/image/'.$imagename,$slider);

        } else {
            $imagename = "default.png";
        }

        $addpatient = new Addpatient;
        $addpatient->name = $request->name;
        $addpatient->phone = $request->phone;
        $addpatient->gender = $request->gender;
        $addpatient->district = $request->district;
        $addpatient->problem = $request->problem;
        $addpatient->age = $request->age;
        $addpatient->slug = str_slug('name');
        $addpatient->save();
        Toastr::Success('Addpatient successfully save)','Success');
        return redirect('dashboard/addpatient');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $addpatient = Addpatient::findorFail($id);

 
         return view('backend.addpatient.show',compact('addpatient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addpatient = Addpatient::findorFail($id);
        $prescription = DB::table('prescriptions')->get();
       $patientadvice = PatientAdvice::all();
          return view('backend.addpatient.edit',compact('addpatient','prescription','patientadvice'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
