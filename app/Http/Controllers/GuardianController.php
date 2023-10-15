<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\PersonalInfo;
use App\Models\Mother;
use App\Models\Father;
use App\Models\Spouse;
use App\Models\OriginPlace;
use App\Models\Residence;
use App\Models\BirthPlace;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $personal_details = PersonalInfo::find($request->personal_id);
        if($request->mother_id){
            $father_info = Guardian::find($request->mother_id);

            //update details
            $father_info->update([
                "surname" => $request->guardian_surname,
                "given_name" => $request->guardian_givenname,
                "other_name" => $request->guardian_othername,
                "passport" => $request->guardian_pasport_no,
                "nin" => $request->guardian_nin,
                "citzenship" => $request->guardian_citz,
                "occupation" => $request->guardian_occupation,
                "state_nationality" => $request->guardian_dual,
                "country" => $request->guardian_country,
                "ditrict" => $request->guardian_district,
                "county" => $request->guardian_county,
                "sub_county" => $request->guardian_subcounty,
                "parish" => $request->guardian_parish,
                "village" => $request->guardian_village,
                "street" => $request->guardian_street,
                "house_no" => $request->guardian_plot,
            ]);
        }else{
            //storing info
            $save_info = Guardian::create([
                "person_id" => $request->personal_id,
                "surname" => $request->guardian_surname,
                "given_name" => $request->guardian_givenname,
                "other_name" => $request->guardian_othername,
                "passport" => $request->guardian_pasport_no,
                "nin" => $request->guardian_nin,
                "citzenship" => $request->guardian_citz,
                "occupation" => $request->guardian_occupation,
                "state_nationality" => $request->guardian_dual,
                "country" => $request->guardian_country,
                "ditrict" => $request->guardian_district,
                "county" => $request->guardian_county,
                "sub_county" => $request->guardian_subcounty,
                "parish" => $request->guardian_parish,
                "village" => $request->guardian_village,
                "street" => $request->guardian_street,
                "house_no" => $request->guardian_plot,
            ]);
            //updating statu
            $personal_details->update([
                "step" => 6
            ]);
        }
        return redirect()->route('seventh_form', ['token' => $personal_details->unique_code, 'id' => $personal_details->id]);
    }

    public function seventh_form($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ])->first();
        if($personal_info == ""){
            return redirect()->route("status");
        }
        $guardian_info = Guardian::where("person_id", $id)->first();
        $mother_info = Mother::where("person_id", $id)->first();
        $father_info = Father::where("person_id", $id)->first();
        $spouse_info = Spouse::where("person_id", $id)->first();
        $origin_info = OriginPlace::where("person_id", $id)->first();
        $birth_info = BirthPlace::where("person_id", $id)->first();
        $residence_info = Residence::where("person_id", $id)->first();
        $return_data = [
            'message' => 'Details Saved Successfully', 
            'status' => 'success',
            'personal_info' => $personal_info,
            'guardian_info' => $guardian_info,
            'mother_info' => $mother_info,
            'father_info' => $father_info,
            'spouse_info' => $spouse_info,
            'origin_info' => $origin_info,
            'birth_info' => $birth_info,
            'residence_info' => $residence_info,
            'token' => $token,
            'person_id' => $id,
        ];
        //assigning current steps completed
        $steps = app('App\Http\Controllers\PersonalInfoController')->check_step($id);
        foreach ($steps as $key => $value) {
            $return_data[$key] = true;
        }
        return view('forms.seventh_form')->with($return_data);
    }

    public function confirm(Request $request){
        $personal_info = PersonalInfo::find($request->personal_id);
        if($personal_info == ""){
            return redirect()->route("status");
        }

        //updating statu
        $personal_info->update([
            "step" => 0,
            "appointment_date" => date("Y-m-d h:i")
        ]);
        return view('forms.confirm')->with([
            'Confrimed' => 'Your Appointment is set to be on',
            'appointment' => date("Y-m-d h:i"),
            'token' => $personal_info->unique_code, 
            'person_id' => $personal_info->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardian $guardian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        //
    }
}
