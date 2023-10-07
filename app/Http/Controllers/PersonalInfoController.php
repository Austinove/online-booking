<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
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
        //file validation
        Validator::validate($request->all(), [
            'lc_letter' => [
                'required',
                File::types(['pdf'])
            ],
            'diso_letter' => [
                'required',
                File::types(['pdf'])
            ]
        ]);

        //initializing file variables
        $lc_letter = "";
        $diso_letter = "";
        if ($request->file("lc_letter")) {
            $file = $request->file("lc_letter");
            $nameWithExt = $file->getClientOriginalName();
            $name = pathinfo($nameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $lc_letter = $name . "_lc_" . time() . "." . $extension;
            $file->move("applicants", $lc_letter);
        } else {
            return redirect()->back()->with([
                'message' => 'No LC letter attached!', 
                'status' => 'danger'
            ]);
        }
        if ($request->file("diso_letter")) {
            $file = $request->file("diso_letter");
            $nameWithExt = $file->getClientOriginalName();
            $name = pathinfo($nameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $diso_letter = $name . "_diso_" . time() . "." . $extension;
            $file->move("applicants", $diso_letter);
        } else {
            return redirect()->back()->with([
                'message' => 'No LC letter attached!', 
                'status' => 'danger'
            ]);
        }

        //generate token
        $unique_code = $this->generateUniqueCode();

        if($request->personal_id){
            $personal_info = PersonalInfo::find($request->personal_id);
            //deleting the two files
            File::delete('applicants/' . $personal_info->lc_letter);
            File::delete('applicants/' . $personal_info->diso_letter);

            //get initial code
            $unique_code = $personal_info->unique_code;

            //update details
            $personal_info->update([
                "surname" => $request->surname,
                "given_name" => $request->givenname,
                "other_name" => $request->othername,
                "maiden_name" => $request->maidenname,
                "dob" => $request->dob,
                "email" => $request->email,
                "mob_number" => $request->mobile,
                "education_level" => $request->levelofeduc,
                "occupation" => $request->occupation,
                "diabilities" => $request->disability,
                "religion" => $request->religion,
                "diso_letter" => $diso_letter,
                "lc_letter" => $lc_letter
            ]);
        }else{
            //storing info
            $save_info = PersonalInfo::create([
                "surname" => $request->surname,
                "given_name" => $request->givenname,
                "other_name" => $request->othername,
                "maiden_name" => $request->maidenname,
                "dob" => $request->dob,
                "email" => $request->email,
                "mob_number" => $request->mobile,
                "education_level" => $request->levelofeduc,
                "occupation" => $request->occupation,
                "diabilities" => $request->disability,
                "religion" => $request->religion,
                "diso_letter" => $diso_letter,
                "lc_letter" => $lc_letter,
                "unique_code" => $unique_code
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Personal Information Saved Successfully', 
            'status' => 'success',
            'step' => 2,
            'token' => $unique_code,
            'person_id' => $save_info->id,
        ]);
    }

    //generation of unique code.
    public function generateUniqueCode() {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        $codeLength = 8;
        $code = '';
        while (strlen($code) < 8) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }
        return $code;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalInfo $personalInfo)
    {
        //
    }
}
