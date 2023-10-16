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
        $data = PersonalInfo::with("residence")->where("step", 0)->get();
        return view('backend.appointments')->with([
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
