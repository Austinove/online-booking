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
        // $row = [];
        // foreach ($data as $key => $personal_row) {
        //     $residence = Residence::where("person_id", $personal_row->id)->first();
        // }
        // $mother_info = Mother::where("person_id", $id)->first();
        // $father_info = Father::where("person_id", $id)->first();
        // $spouse_info = Spouse::where("person_id", $id)->first();
        // $origin_info = OriginPlace::where("person_id", $id)->first();
        // $birth_info = BirthPlace::where("person_id", $id)->first();
        // // $residence_info = Residence::where("person_id", $id)->first();
        // $return_data = [
        //     'message' => 'Details Saved Successfully', 
        //     'status' => 'success',
        //     'personal_info' => $personal_info,
        //     'guardian_info' => $guardian_info,
        //     'mother_info' => $mother_info,
        //     'father_info' => $father_info,
        //     'spouse_info' => $spouse_info,
        //     'origin_info' => $origin_info,
        //     'birth_info' => $birth_info,
        //     'residence_info' => $residence_info,
        //     'token' => $token,
        //     'person_id' => $id,
        // ];
        return view('backend.appointments')->with([
            'data' => $data
        ]);
        // return view('backend.appointments');
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
