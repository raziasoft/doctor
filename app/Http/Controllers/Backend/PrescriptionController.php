<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Backend\Addpatient;
use App\Backend\Prescription;
use App\Backend\PatientMedicine;
use App\Backend\PatientTest;
use App\Backend\PatientAdvice;
use DB;
class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescription = DB::table('prescriptions')->get();
        return view('backend.prescription.index',compact('prescription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addpatient = Addpatient::all();
        return view('backend.prescription.create',compact('addpatient'));
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
            'addpatient_id' => 'required',
            'addpatient_name' => 'required',
            'addpatient_phone' => 'required',
            'blood' => 'required',
            'cc' => 'required',
            'weight' => 'required',
            'bp' => 'required',
            'ex' => 'required',
            'pd' => 'required',
        ]);

        $customer = new Prescription;
        
        $customer->addpatient_id = $request->addpatient_id;
        $customer->addpatient_name = $request->addpatient_name;
        $customer->addpatient_phone = $request->addpatient_phone;
        $customer->blood = $request->blood;
        $customer->cc = $request->cc;
        $customer->weight = $request->weight;
        $customer->bp = $request->bp;
        $customer->ex = $request->ex;
        $customer->pd = $request->pd;
        $id = $customer->save();

           
        if($id !=0)
        {
            foreach ($request->type as $key => $v) {
                 $id = $customer->id;
                $data = array(
                    'prescription_id' => $id,
                     'type' => $request->type [$key],
                    'mdname' => $request->mdname [$key],
                    'mgml' => $request->mgml [$key],
                    'dose' => $request->dose [$key],
                    'day' => $request->day [$key],
                    'mcomment' => $request->mcomment [$key],

                );

                PatientMedicine::insert($data);
            }
        }

             if($id !=0)
        {
            foreach ($request->diseasename as $key => $v) {
                 $id = $customer->id;
                $data = array(
                    'prescription_id' => $id,
                     'diseasename' => $request->diseasename [$key],
                    'tname' => $request->tname [$key],

                );
                PatientTest::insert($data);
            }
        }
        // patient advice
        if($id !=0)
        {
            foreach ($request->advice as $key => $v) {
                 $id = $customer->id;
                $data = array(
                    'prescription_id' => $id,
                     'advice' => $request->advice [$key],
                );
                PatientAdvice::insert($data);
            }
        }
        return redirect('dashboard/prescription');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prescription = Prescription::find($id);
        return view('backend.prescription.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
