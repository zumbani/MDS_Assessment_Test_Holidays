<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;  
use \App\Models\Holiday;
use DataTables;
use PDF;  

class HolidayController extends Controller
{
    //
    public function index()
    {     
        return view('holidays');
    }

    public function holidaysPdf(Request $request)
    {
            $holidays = Holiday::all();
            $pdf = PDF::loadView('holidays_pdf', compact('holidays'));
            return $pdf->download('South_African_Holidays.pdf');  
    }

    public function getHolidays(Request $request)
    {
       if ($request->ajax()) {
            $data = Holiday::orderBy('holiday_year', 'ASC')
                    ->orderBy('holiday_date', 'ASC')
                    ->get();
            return DataTables::of($data)
                ->addIndexColumn()                
                ->make(true);               
       }
    }
}
