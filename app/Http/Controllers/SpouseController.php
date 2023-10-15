<?php

namespace App\Http\Controllers;

use App\Models\Spouse;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\Father;

class SpouseController extends Controller
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
        if($request->spouse_id){
            $spouse_info = Spouse::find($request->spouse_id);

            //update details
            $spouse_info->update([
                "surname" => $request->ssurname,
                "given_name" => $request->sgivenname,
                "other_name" => $request->sothername,
                "maiden_name" => $request->smaidenname,
                "nin" => $request->snin,
                "dom" => $request->dom,
                "marriage_place" => $request->smariage_place,
                "marriage_type" => $request->mariage_type,
                "marriage_cert" => $request->mariage_number,
                "citzenship" => $request->ssitz,
                "state_nationality" => $request->sdual,
                "spouse_number" => $request->other_spouses,
            ]);
        }else{
            //storing info
            $save_info = Spouse::create([
                "person_id" => $request->personal_id,
                "surname" => $request->ssurname,
                "given_name" => $request->sgivenname,
                "other_name" => $request->sothername,
                "maiden_name" => $request->smaidenname,
                "nin" => $request->snin,
                "dom" => $request->dom,
                "marriage_place" => $request->smariage_place,
                "marriage_type" => $request->mariage_type,
                "marriage_cert" => $request->mariage_number,
                "citzenship" => $request->ssitz,
                "state_nationality" => $request->sdual,
                "spouse_number" => $request->other_spouses,
            ]);
            //updating statu
            $personal_details->update([
                "step" => 3
            ]);
        }
        return redirect()->route('fourth_form', ['token' => $personal_details->unique_code, 'id' => $personal_details->id]);
    }

    public function fourth_form($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ]);
        if($personal_info->count()<1){
            return redirect()->route("status");
        }
        $info = Father::where("person_id", $id)->first();
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
        return view('forms.fourth_form')->with($return_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spouse  $spouse
     * @return \Illuminate\Http\Response
     */
    public function show(Spouse $spouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spouse  $spouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Spouse $spouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spouse  $spouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spouse $spouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spouse  $spouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spouse $spouse)
    {
        //
    }
}
