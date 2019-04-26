<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;
use App\Backend\Prescription;
use App\Backend\PatientMedicine;
use App\Backend\PatientTest;
use App\Backend\PatientAdvice;
class Addpatient extends Model
{
    public function prescription()
    {
        return $this->hasMany('App\Backend\Prescription');
    }

        public function prescriptionss()
    {
        return $this->belongsTo('App\Backend\Prescription');
    }

}
