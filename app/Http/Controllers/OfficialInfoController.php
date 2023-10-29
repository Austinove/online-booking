<?php

namespace App\Http\Controllers;

use App\Models\OfficialInfo;
use Illuminate\Http\Request;
use App\Models\Guardian;
use App\Models\PersonalInfo;
use App\Models\Mother;
use App\Models\Father;
use App\Models\Spouse;
use App\Models\OriginPlace;
use App\Models\Residence;
use App\Models\BirthPlace;
use App\Models\User;

class OfficialInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointments()
    {
        $data = PersonalInfo::with("residence")->where("step", 0)->orwhere("step", 10)->orwhere("step", 11)->get();
        return view('backend.appointments')->with([
            'data' => $data
        ]);
    }

    public function pending_appointments()
    {
        $data = PersonalInfo::with("residence")->where("step", 10)->get();
        return view('backend.pending_appointments')->with([
            'data' => $data
        ]);
    }

    public function applicant($id) {
        $data = PersonalInfo::with(["residence", "birthplace", "father", "guardian", "mother", "original_place", "spouse"])->find($id);
        return view('backend.application_details')->with([
            'data' => $data
        ]);
    }

    public function appointment_date(Request $request) {
        PersonalInfo::find($request->id)->update([
            "appointment_date" => $request->app_date,
            "step" => 10
        ]);
        $personal_details = PersonalInfo::find($request->id);

        // $to = $personal_details->email;
        $to = "bryanovicaustenove@gmail.com";
        $subject = "Appointment Confirmation";
        $message = "
        <html>
        <head>
        <title>Appointment Confirmation</title>
        </head>
        <body>
        <p><strong>Dear ".$personal_details->surname."</strong></p>
        <p>Please take note of your appointment date below!</p>
        <p>Appointment Date: <strong><u>".date('d-m-Y', strtotime($request->app_date))." AT ".date('H:i A', strtotime($request->app_date))."</u></strong></p>
        <p>Please reach out offices physically for the interview on that specified data and time.</p>
        <p>Kind regards.</p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <onlinebooking@example.com>' . "\r\n";

        mail($to,$subject,$message,$headers);

        return redirect()->route('applicant', ['id' => $request->id]); 
    }

    public function request_changes(Request $request) {
        PersonalInfo::find($request->id)->update([
            "changes" => $request->changes,
            "step" => 7
        ]);
        return redirect()->route('appointments')->with([
            'send_changes' => true
        ]); 
    }

    public function finished_appointment(Request $request) {
        PersonalInfo::find($request->id)->update([
            "changes" => $request->changes,
            "step" => 11
        ]);
        return redirect()->route('appointments')->with([
            'send_changes' => true,
            'message' => 'Appointment Completed Successfully'
        ]); 
    }

    public function edit_profile(Request $request) {
        $user = User::find($request->id)->update([
            'name' => $request->fullName,
            'email' => $request->email
        ]);
        return redirect()->back()->with([
            'message' => 'Profile Updated Successfully',
            'status' => 'success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfficialInfo  $officialInfo
     * @return \Illuminate\Http\Response
     */
    public function show(OfficialInfo $officialInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfficialInfo  $officialInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficialInfo $officialInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfficialInfo  $officialInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficialInfo $officialInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfficialInfo  $officialInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficialInfo $officialInfo)
    {
        //
    }
}
