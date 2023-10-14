<?php

namespace App\Http\Controllers;

use App\Models\Father;
use App\Models\Mother;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class FatherController extends Controller
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
        if($request->father_id){
            $father_info = Father::find($request->father_id);

            //update details
            $father_info->update([
                "surname" => $request->father_surname,
                "given_name" => $request->father_givenname,
                "other_name" => $request->father_othername,
                "nin" => $request->father_nin,
                "citzenship" => $request->father_citz,
                "living_state" => $request->father_living_status,
                "occupation" => $request->father_occupation,
                "state_nationality" => $request->father_dual,
                "country" => $request->father_country,
                "ditrict" => $request->father_district,
                "county" => $request->father_county,
                "sub_county" => $request->father_subcounty,
                "parish" => $request->father_parish,
                "village" => $request->father_village,
                "street" => $request->father_street,
                "house_no" => $request->father_plot,
                "ocountry" => $request->ofather_country,
                "oditrict" => $request->ofather_district,
                "ocounty" => $request->ofather_county,
                "osub_county" => $request->ofather_subcounty,
                "oparish" => $request->ofather_parish,
                "ovillage" => $request->ofather_village,
                "ostreet" => $request->ofather_street,
                "ohouse_no" => $request->ofather_plot,
            ]);
        }else{
            //storing info
            $save_info = Father::create([
                "person_id" => $request->personal_id,
                "surname" => $request->father_surname,
                "given_name" => $request->father_givenname,
                "other_name" => $request->father_othername,
                "nin" => $request->father_nin,
                "citzenship" => $request->father_citz,
                "living_state" => $request->father_living_status,
                "occupation" => $request->father_occupation,
                "state_nationality" => $request->father_dual,
                "country" => $request->father_country,
                "ditrict" => $request->father_district,
                "county" => $request->father_county,
                "sub_county" => $request->father_subcounty,
                "parish" => $request->father_parish,
                "village" => $request->father_village,
                "street" => $request->father_street,
                "house_no" => $request->father_plot,
                "ocountry" => $request->ofather_country,
                "oditrict" => $request->ofather_district,
                "ocounty" => $request->ofather_county,
                "osub_county" => $request->ofather_subcounty,
                "oparish" => $request->ofather_parish,
                "ovillage" => $request->ofather_village,
                "ostreet" => $request->ofather_street,
                "ohouse_no" => $request->ofather_plot,
            ]);
            //updating statu
            $personal_details->update([
                "step" => 4
            ]);
        }
        return redirect()->route('fifth_form', ['token' => $personal_details->unique_code, 'id' => $personal_details->id]);
    }

    public function fifth_form($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ])->first();
        if($personal_info == ""){
            return redirect()->route("status");
        }
        $info = Mother::where("person_id", $id)->first();
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
        return view('forms.fifth_form')->with($return_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function show(Father $father)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function edit(Father $father)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Father $father)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function destroy(Father $father)
    {
        //
    }
}
