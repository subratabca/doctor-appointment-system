<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Prescription;
use App\Medicine;
use App\Problem;
use App\Investigation;

class PrescriptionController extends Controller
{
    public function index()
    {

    	date_default_timezone_set('Asia/Dhaka');
		$bookings =  Booking::where('date',date('Y-m-d'))->where('status',1)->where('doctor_id',auth()->user()->id)->get();
		return view('prescription.index',compact('bookings'));
    }
   

    public function create($userId,$date)
    {
        $booking = Booking::where('user_id',$userId)->where('date',$date)->where('status',1)->where('doctor_id',auth()->user()->id)->first();
        return view('prescription.new_prescription_form',compact('booking'));
    }

    public function store(Request $request)
    {
    	//$data  = $request->all();
        //dd($data);
    	//$data['medicine'] = implode(',',$request->medicine);
    	//Prescription::create($data);
    	//return redirect()->back()->with('message','Prescription created');

/*$name_of_disease = $request->name_of_disease;
$symptoms = $request->symptoms;
$user_id= $request->user_id;
$doctor_id = $request->doctor_id;
$date = $request->date;
$feedback = $request->feedback;
$signature = $request->signature;
*/
        $prescription = Prescription::create([
            'user_id'=>  $request->user_id,
            'doctor_id' =>  $request->doctor_id,
            'date'=>  $request->date,
            'feedback' => $request->feedback
        ]);


        $problemData = $request->problem;
        $length=count($problemData);
        //dd($problems[0]);
        for($i=0; $i < $length; $i++){
            $problem = new Problem;
            $problem->prescription_id = $prescription->id;
            $problem->problem = $problemData[$i];
            $problem->save();
        }


        $investigationData = $request->investigation;
        $length=count($investigationData);
        for($i=0; $i < $length; $i++){
            $Investigation = new Investigation;
            $Investigation->prescription_id = $prescription->id;
            $Investigation->investigation = $investigationData[$i];
            $Investigation->save();
        }

        $medicines = $request->medicine;
        $procedure_to_use_medicine = $request->procedure_to_use_medicine;
        //dd($medicines);
        //dd($procedure_to_use_medicine);
        foreach($medicines as $key => $medicine)
        {
            $input['prescription_id'] = $prescription->id;
            $input['medicine'] = $medicine;
            $input['procedure_to_use_medicine'] = $procedure_to_use_medicine[$key];
            Medicine::create($input);
        }

        return redirect()->back()->with('message','Prescription created');
    }

    public function show($userId,$date)
    {
        $prescription = Prescription::with('problems','investigations','medicines')->where('user_id',$userId)->where('date',$date)->first();
        //$medicines = Medicine::where('prescription_id',$prescription->id)->get();
        //dd($prescription);
        //return view('prescription.show',compact('prescription'));
        return view('prescription.show_prescription',compact('prescription'));
    }

    //get all patients from prescription table
    public function patientsFromPrescription()
    {
        $patients = Prescription::get();
        return view('prescription.all',compact('patients'));
    }



}
