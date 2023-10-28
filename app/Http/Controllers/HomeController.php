<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $today_applications = PersonalInfo::whereDate('created_at', Carbon::today())->get()->count();
        $month_applications = PersonalInfo::whereMonth('created_at', Carbon::now()->month)->get()->count();
        $year_applications = PersonalInfo::whereYear('created_at', Carbon::now()->year)->get()->count();
        return view('home')->with([
            "today_applications" => $today_applications,
            "month_applications" => $month_applications,
            "year_applications" => $year_applications
        ]);
    }

    public function bar_graph(){
        $appointments = PersonalInfo::select('id', 'created_at')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $appointments_count = [];
        $monthly_appointments = [];

        foreach ($appointments as $key => $value) {
            $appointments_count[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($appointments_count[$i])){
                array_push($monthly_appointments, $appointments_count[$i]);    
            }else{
                array_push($monthly_appointments, 0);   
            }
        }
        return $monthly_appointments;
    }

    public function apex_chart(){
        //fetch completed appointments
        $appointments_completed = PersonalInfo::select('id', 'created_at')->where("step", 11)->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $completed_count = [];
        $monthly_completed = [];

        foreach ($appointments_completed as $key => $value) {
            $completed_count[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($completed_count[$i])){
                array_push($monthly_completed, $completed_count[$i]);    
            }else{
                array_push($monthly_completed, 0);   
            }
        }

        //fetch pending appointments
        $appointments_pending = PersonalInfo::select('id', 'created_at')->where("step", 10)->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $pending_count = [];
        $monthly_pending = [];

        foreach ($appointments_pending as $key => $value) {
            $pending_count[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($pending_count[$i])){
                array_push($monthly_pending, $pending_count[$i]);    
            }else{
                array_push($monthly_pending, 0);   
            }
        }

        //getting maximum values from the arrays
        $pending_max = max($monthly_pending);
        $completed_max = max($monthly_completed);
        //complare maximum values
        $max_value = $pending_max > $completed_max ? $pending_max : $completed_max;

        return response()->json([
            "monthly_completed" => $monthly_completed,
            "monthly_pending" => $monthly_pending,
            "max_value" => $max_value
        ]);
    }

    public function adults_children(){
        $applicants = PersonalInfo::select('id', 'dob')->where("step", 11)->get();
        $adults = [];
        $child = [];
        foreach ($applicants as $key => $value) {
            date('Y') - date('Y',strtotime($value->dob)) > 17 ? array_push($adults, $value) : array_push($child, $value); 
        }
        
        return response()->json([
            "adult" => count($adults),
            "child" => count($child)
        ]);
    }

    public function appointments_data(){
        $appointments = PersonalInfo::where("step", 10)->get();
        return response()->json([
            "appointments" => $appointments
        ]);
    }
}
