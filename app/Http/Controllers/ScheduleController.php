<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $schedules = Schedule::all();
        return view('pages.schedules.schedules',compact('schedules'));
    }
}
?>
