<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;
use App\Models\OriginPlace;
use App\Models\BirthPlace;
use App\Models\PersonalInfo;
use App\Models\Spouse;

class ResidenceController extends Controller
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
        if($request->residence_id){
            $residence_info = Residence::find($request->residence_id);
            $origin = OriginPlace::where("person_id", $request->personal_id)->first();
            $birthPlace = BirthPlace::where("person_id", $request->personal_id)->first();

            //update residence details
            $residence_info->update([
                "type" => $request->residence_type,
                "country" => $request->rcountry,
                "ditrict" => $request->rdistrict,
                "county" => $request->rcounty,
                "sub_county" => $request->rsubcounty,
                "parish" => $request->rparish,
                "village" => $request->rvillage,
                "street" => $request->rstreet,
                "house_no" => $request->rplot,
                "years_lived" => $request->ryears,
                "previous_district" => $request->rpdistrict,
                "previous_address" => $request->rpaddress,
                "citzenship" => $request->citz,
                "state_nationality" => $request->dual_nationality,
                "citzenship_years" => $request->cyears
            ]);

            //update birth place details
            $birthPlace->update([
                "country" => $request->bcountry,
                "ditrict" => $request->bdistrict,
                "county" => $request->bcounty,
                "sub_county" => $request->bsubcounty,
                "parish" => $request->bparish,
                "village" => $request->bvillage,
                "city" => $request->bcity,
                "health_facility" => $request->bfacility,
                "birth_weight" => $request->bweight,
                "parity" => $request->bparity
            ]);

            //update origin details
            $origin->update([
                "country" => $request->ocountry,
                "ditrict" => $request->odistrict,
                "county" => $request->ocounty,
                "sub_county" => $request->osubcounty,
                "parish" => $request->oparish,
                "village" => $request->ovillage,
                "tribe" => $request->otribe,
                "clan" => $request->oclan,
            ]);
        }else{
            //saving residence details
            $save_info = Residence::create([
                "person_id" => $request->personal_id,
                "type" => $request->residence_type,
                "country" => $request->rcountry,
                "ditrict" => $request->rdistrict,
                "county" => $request->rcounty,
                "sub_county" => $request->rsubcounty,
                "parish" => $request->rparish,
                "village" => $request->rvillage,
                "street" => $request->rstreet,
                "house_no" => $request->rplot,
                "years_lived" => $request->ryears,
                "previous_district" => $request->rpdistrict,
                "previous_address" => $request->rpaddress,
                "citzenship" => $request->citz,
                "state_nationality" => $request->dual_nationality,
                "citzenship_years" => $request->cyears
            ]);

            //updating statu
            $personal_details->update([
                "step" => 2
            ]);

            //save birth place
            $birthPlace = BirthPlace::create([
                "person_id" => $request->personal_id,
                "country" => $request->bcountry,
                "ditrict" => $request->bdistrict,
                "county" => $request->bcounty,
                "sub_county" => $request->bsubcounty,
                "parish" => $request->bparish,
                "village" => $request->bvillage,
                "city" => $request->bcity,
                "health_facility" => $request->bfacility,
                "birth_weight" => $request->bweight,
                "parity" => $request->bparity
            ]);

            //saving origin details
            $origin = OriginPlace::create([
                "person_id" => $request->personal_id,
                "country" => $request->ocountry,
                "ditrict" => $request->odistrict,
                "county" => $request->ocounty,
                "sub_county" => $request->osubcounty,
                "parish" => $request->oparish,
                "village" => $request->ovillage,
                "tribe" => $request->otribe,
                "clan" => $request->oclan,
            ]);
        }
        return redirect()->route('third_form', ['token' => $personal_details->unique_code, 'id' => $personal_details->id]);
    }

    public function third_form($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ])->first();
        if($personal_info == ""){
            return redirect()->route("status");
        }
        $info = Spouse::where("person_id", $id)->first();
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
        return view('forms.third_form')->with($return_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function show(Residence $residence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function edit(Residence $residence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residence $residence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residence $residence)
    {
        //
    }
}
