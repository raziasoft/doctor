<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;
use App\Backend\Addpatient;
use App\Backend\PatientMedicine;
use App\Backend\PatientTest;
use App\Backend\PatientAdvice;
class Prescription extends Model
{

    public function patientmedicine()
	{
      return $this->hasMany('App\backend\PatientMedicine');

	}
   	public function patienttest()
	{
      return $this->hasMany('App\backend\PatientTest');

	}
	
	   	public function patientadvice()
	{
      return $this->hasMany('App\backend\PatientAdvice');

	}
}
