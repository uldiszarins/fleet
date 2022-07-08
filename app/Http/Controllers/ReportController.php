<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Truck;
use App\Models\Employee;

class ReportController extends Controller
{
    public function index(): View
    {
        $skates = Truck::select("id", "truck_number", "truck_technical_inspection_date", DB::raw("IF(truck_technical_inspection_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("truck_technical_inspection_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("truck_technical_inspection_date")
            ->get();
        
        $vinjetes = Truck::select("id", "truck_number", "truck_vignette_date", "truck_vignette_number", DB::raw("IF(truck_vignette_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("truck_vignette_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("truck_vignette_date")
            ->get();

        $insurances = Truck::select("id", "truck_number", "truck_insurance_date", "truck_insurance_number", DB::raw("IF(truck_insurance_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("truck_insurance_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("truck_insurance_date")
            ->get();

        $ccInsurances = Truck::select("id", "truck_number", "truck_cc_insurance_date", "truck_cc_insurance_number", DB::raw("IF(truck_cc_insurance_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("truck_cc_insurance_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("truck_cc_insurance_date")
            ->get();
        
        $transportations = Truck::select("id", "truck_number", "truck_transportation_date", "truck_transportation_number", DB::raw("IF(truck_transportation_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("truck_transportation_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("truck_transportation_date")
            ->get();

        $waste = Truck::select("id", "truck_number", "truck_waste_date", "truck_waste_number", DB::raw("IF(truck_waste_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("truck_waste_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("truck_waste_date")
            ->get();
        
        $driverLicenses = Employee::select("id", "empl_name", "empl_surname", "empl_driver_license_date", DB::raw("IF(empl_driver_license_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("empl_driver_license_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("empl_driver_license_date")
            ->get();

        $healths = Employee::select("id", "empl_name", "empl_surname", "empl_health_date", DB::raw("IF(empl_health_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("empl_health_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("empl_health_date")
            ->get();

        $emplInsurances = Employee::select("id", "empl_name", "empl_surname", "empl_insurance_date", DB::raw("IF(empl_insurance_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("empl_insurance_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("empl_insurance_date")
            ->get();

        $workSafeties = Employee::select("id", "empl_name", "empl_surname", "empl_work_safety_date", DB::raw("IF(empl_work_safety_date <= DATE(NOW()), 1, 0) as over_date"))
            ->where("empl_work_safety_date", "<=", DB::raw("DATE_ADD(NOW(), INTERVAL 30 DAY)"))
            ->orderBy("empl_work_safety_date")
            ->get();

        return view('reports', [
            'skates' => $skates,
            'vinjetes' => $vinjetes,
            'insurances' => $insurances,
            'ccInsurances' => $ccInsurances,
            'transportations' => $transportations,
            'waste' => $waste,
            'driverLicenses' => $driverLicenses,
            'healths' => $healths,
            'emplInsurances' => $emplInsurances,
            'workSafeties' => $workSafeties,
        ]);
    }
}
