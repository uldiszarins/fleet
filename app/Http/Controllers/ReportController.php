<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(): View
    {
        $skates = DB::table('trucks')
            ->select("id", "truck_number", "truck_technical_inspection_date")
            ->where("deleted_at")
            ->where("truck_technical_inspection_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("truck_technical_inspection_date", "!=", "0000-00-00")
            ->orderBy("truck_technical_inspection_date")
            ->get();
        
        $vinjetes = DB::table('trucks')
            ->select("id", "truck_number", "truck_vignette_date", "truck_vignette_number")
            ->where("deleted_at")
            ->where("truck_vignette_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("truck_vignette_date", "!=", "0000-00-00")
            ->orderBy("truck_vignette_date")
            ->get();

        $insurances = DB::table('trucks')
            ->select("id", "truck_number", "truck_insurance_date", "truck_insurance_number")
            ->where("deleted_at")
            ->where("truck_insurance_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("truck_insurance_date", "!=", "0000-00-00")
            ->orderBy("truck_insurance_date")
            ->get();

        $ccInsurances = DB::table('trucks')
            ->select("id", "truck_number", "truck_cc_insurance_date", "truck_cc_insurance_number")
            ->where("deleted_at")
            ->where("truck_cc_insurance_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("truck_cc_insurance_date", "!=", "0000-00-00")
            ->orderBy("truck_cc_insurance_date")
            ->get();
        
        $transportations = DB::table('trucks')
            ->select("id", "truck_number", "truck_transportation_date", "truck_transportation_number")
            ->where("deleted_at")
            ->where("truck_transportation_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("truck_transportation_date", "!=", "0000-00-00")
            ->orderBy("truck_transportation_date")
            ->get();

        $waste = DB::table('trucks')
            ->select("id", "truck_number", "truck_waste_date", "truck_waste_number")
            ->where("deleted_at")
            ->where("truck_waste_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("truck_waste_date", "!=", "0000-00-00")
            ->orderBy("truck_waste_date")
            ->get();
        
        $driverLicenses = DB::table('employees')
            ->select("id", "empl_name", "empl_surname", "empl_driver_license_date")
            ->where("deleted_at")
            ->where("empl_driver_license_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->where("empl_driver_license_date", "!=", "0000-00-00")
            ->orderBy("empl_driver_license_date")
            ->get();

        return view('reports', [
            'skates' => $skates,
            'vinjetes' => $vinjetes,
            'insurances' => $insurances,
            'ccInsurances' => $ccInsurances,
            'transportations' => $transportations,
            'waste' => $waste,
            'driverLicenses' => $driverLicenses,
        ]);
    }
}
