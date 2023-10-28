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
