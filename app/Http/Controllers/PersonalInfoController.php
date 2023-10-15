<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;
use App\Models\OriginPlace;
use App\Models\BirthPlace;
// namespace App\Http\Controllers\Auth;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('forms.first_form');
    }

    public function check_step($id){
        $personal_info = PersonalInfo::find($id);
        if($personal_info == ""){
            return false;
        }

        switch ($personal_info->step) {
            case 1:
                return [
                    'step1' => true,
                ];
                break;
            
            case 2:
                return [
                    'step1' => true,
                    'step2' => true,
                    'step3' => true
                ];
                break;
            
            case 3:
                return [
                    'step1' => true,
                    'step2' => true,
                    'step3' => true,
                    'step4' => true
                ];
                break;
            
            case 4:
                return [
                    'step1' => true,
                    'step2' => true,
                    'step3' => true,
                    'step4' => true,
                    'step5' => true
                ];
                break;
            
            case 5:
                return [
                    'step1' => true,
                    'step2' => true,
                    'step3' => true,
                    'step4' => true,
                    'step5' => true,
                    'step6' => true
                ];
                break;
            case 6:
                return [
                    'step1' => true,
                    'step2' => true,
                    'step3' => true,
                    'step4' => true,
                    'step5' => true,
                    'step6' => true,
                    'step7' => true
                ];
                break;
            case 0:
                return [
                    'step1' => true,
                    'step2' => true,
                    'step3' => true,
                    'step4' => true,
                    'step5' => true,
                    'step6' => true,
                    'step7' => true
                ];
                break;
            
            default:
                return false;
                break;
        }
    }

    public function resume_status(Request $request){
        $personal_info = PersonalInfo::where("unique_code", $request->token)->first();
        if($personal_info == ""){
            return redirect()->back()->with([
                'message' => 'Wrong Token Entered, Please try again'
            ]);
        }

        switch ($personal_info->step) {
            case 1:
                return redirect()->route('second_form', [
                    'token' => $personal_info->unique_code, 
                    'id' => $personal_info->id
                ])->with([
                    'step2' => true,
                    'step3' => true,
                    'token' => $request->token,
                    'person_id' => $personal_info->id,
                ]);
                break;
            
            case 2:
                return redirect()->route('third_form', [
                    'token' => $personal_info->unique_code, 
                    'id' => $personal_info->id
                ])->with([
                    'step2' => true,
                    'step3' => true,
                    'token' => $request->token,
                    'person_id' => $personal_info->id,
                ]);
                break;
            
            case 3:
                # code...
                break;
            
            case 4:
                # code...
                break;
            
            case 5:
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }

    public function form1_edit($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ]);
        if($personal_info->count()<1){
            return redirect()->route("status");
        }
        $personal_info = PersonalInfo::find($id);
        $return_data = [
            'token' => $token,
            'person_id' => $id,
            'personal_data' => $personal_info
        ];
        //assigning current steps completed
        $steps = $this->check_step($id);
        foreach ($steps as $key => $value) {
            $return_data[$key] = true;
        }
        return view('forms.first_form')->with($return_data);
    }
    public function form2_edit($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ]);
        if($personal_info->count()<1){
            return redirect()->route("status");
        }
        $info = Residence::where("person_id", $id)->first();
        $origin = OriginPlace::where("person_id", $id)->first();
        $birth = BirthPlace::where("person_id", $id)->first();
        $return_data = [
            'token' => $token,
            'person_id' => $id,
            'data' => $info,
            'origin' => $origin,
            'birth' => $birth
        ];
        //assigning current steps completed
        $steps = $this->check_step($id);
        foreach ($steps as $key => $value) {
            $return_data[$key] = true;
        }
        return view('forms.second_form')->with($return_data);
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
        // Validator::validate($request->all(), [
        //     'lc_letter' => [
        //         'required',
        //         File::types(['pdf'])
        //     ],
        //     'diso_letter' => [
        //         'required',
        //         File::types(['pdf'])
        //     ]
        // ]);

        //initializing file variables
        $lc_letter = "";
        $diso_letter = "";
        $id = "";
        if ($request->file("lc_letter")) {
            $file = $request->file("lc_letter");
            $nameWithExt = $file->getClientOriginalName();
            $name = pathinfo($nameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $lc_letter = $name . "_lc_" . time() . "." . $extension;
            $file->move("applicants", $lc_letter);
        }
        if ($request->file("diso_letter")) {
            $file = $request->file("diso_letter");
            $nameWithExt = $file->getClientOriginalName();
            $name = pathinfo($nameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $diso_letter = $name . "_diso_" . time() . "." . $extension;
            $file->move("applicants", $diso_letter);
        }

        //generate token
        $unique_code = $this->generateUniqueCode();

        if($request->personal_id){
            $id = $request->personal_id;
            $personal_info = PersonalInfo::find($request->personal_id);

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
                "unique_code" => $unique_code,
                "step" => 1
            ]);
            $id = $save_info->id;
        }
        return redirect()->route('second_form', ['token' => $unique_code, 'id' => $id]);
    }

    public function second_form($token, $id){
        $personal_info = PersonalInfo::where([
            "unique_code" => $token,
            "id" => $id
        ]);
        if($personal_info->count()<1){
            return redirect()->route("status");
        }
        $info = Residence::where("person_id", $id)->first();
        $origin = OriginPlace::where("person_id", $id)->first();
        $birth = BirthPlace::where("person_id", $id)->first();
        return view('forms.second_form')->with([
            'message' => 'Personal Information Saved Successfully', 
            'status' => 'success',
            'step2' => true,
            'step3' => true,
            'token' => $token,
            'person_id' => $id,
            'data' => $info,
            'origin' => $origin,
            'birth' => $birth,
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

    public function return_step_one($token, $id) {
        $personal_info = PersonalInfo::find($id);
        return redirect()->back()->with([
            'step' => 1,
            'token' => $personal_info->unique_code,
            'person_id' => $id,
            'data' => $personal_info
        ]);
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
