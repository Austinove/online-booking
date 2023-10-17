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
}
