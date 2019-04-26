<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;
use App\Backend\Prescription;
class PatientMedicine extends Model
{
    public function prescription(){
    	return $this->belongsTo('App\Backend\Prescription');
    }
}
