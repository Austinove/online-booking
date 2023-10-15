<?php

namespace App\Http\Controllers;

use App\Models\Mother;
use App\Models\Guardian;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class MotherController extends Controller
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
            $father_info = Mother::find($request->mother_id);

            //update details
            $father_info->update([
                "surname" => $request->mother_surname,
                "given_name" => $request->mother_givenname,
                "other_name" => $request->mother_othername,
                "maiden_name" => $request->mother_maiden,
                "nin" => $request->mother_nin,
                "citzenship" => $request->mother_citz,
                "living_state" => $request->mother_living_status,
                "occupation" => $request->mother_occupation,
                "state_nationality" => $request->mother_dual,
                "country" => $request->mother_country,
                "ditrict" => $request->mother_district,
                "county" => $request->mother_county,
                "sub_county" => $request->mother_subcounty,
                "parish" => $request->mother_parish,
                "village" => $request->mother_village,
                "street" => $request->mother_street,
                "house_no" => $request->mother_plot,
                "ocountry" => $request->omother_country,
                "oditrict" => $request->omother_district,
                "ocounty" => $request->omother_county,
                "osub_county" => $request->omother_subcounty,
                "oparish" => $request->omother_parish,
                "ovillage" => $request->omother_village,
                "ostreet" => $request->omother_street,
                "ohouse_no" => $request->omother_plot,
            ]);
        }else{
            //storing info
            $save_info = Mother::create([
                "person_id" => $request->personal_id,
                "surname" => $request->mother_surname,
                "given_name" => $request->mother_givenname,
                "other_name" => $request->mother_othername,
                "maiden_name" => $request->mother_maiden,
                "nin" => $request->mother_nin,
                "citzenship" => $request->mother_citz,
                "living_state" => $request->mother_living_status,
                "occupation" => $request->mother_occupation,
                "state_nationality" => $request->mother_dual,
                "country" => $request->mother_country,
                "ditrict" => $request->mother_district,
                "county" => $request->mother_county,
                "sub_county" => $request->mother_subcounty,
                "parish" => $request->mother_parish,
                "village" => $request->mother_village,
                "street" => $request->mother_street,
                "house_no" => $request->mother_plot,
                "ocountry" => $request->omother_country,
                "oditrict" => $request->omother_district,
                "ocounty" => $request->omother_county,
                "osub_county" => $request->omother_subcounty,
                "oparish" => $request->omother_parish,
                "ovillage" => $request->omother_village,
                "ostreet" => $request->omother_street,
                "ohouse_no" => $request->omother_plot,
            ]);
            //updating statu
            $personal_details->update([
                "step" => 5
            ]);
        }
        return redirect()->route('sixth_form', ['token' => $personal_details->unique_code, 'id' => $personal_details->id]);
    }

    public function sixth_form($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ])->first();
        if($personal_info == ""){
            return redirect()->route("status");
        }
        $info = Guardian::where("person_id", $id)->first();
        $return_data = [
            'message' => 'Details Saved Successfully', 
            'status' => 'success',
            'data' => $info,
            'token' => $token,
            'person_id' => $id,
        ];
        //assigning current steps completed
        $steps = app('App\Http\Controllers\PersonalInfoController')->check_step($id);
        foreach ($steps as $key => $value) {
            $return_data[$key] = true;
        }
        return view('forms.sixth_form')->with($return_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function show(Mother $mother)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function edit(Mother $mother)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mother $mother)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mother $mother)
    {
        //
    }
}
