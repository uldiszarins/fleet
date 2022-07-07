<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'id',
        'empl_name',
        'empl_surname',
        'empl_phone',
        'empl_address',
        'empl_driver_license_date',
        'empl_health_date',
        'empl_insurance_date',
        'empl_work_safety_date',
    ];

    public const VALIDATION_RULES = [
        'empl_name' => [
            'required',
            'string',
            'min:3',
            'max:100',
        ],
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*']);
    }

    public function getTruckTechnicalInspectionDateAttribute()
    {
        return ($this->attributes['truck_technical_inspection_date'] != '0000-00-00' ?
            $this->attributes['truck_technical_inspection_date']
            : '');
    }

    public function getTruckWasteDateAttribute()
    {
        return ($this->attributes['truck_waste_date'] != '0000-00-00' ?
            $this->attributes['truck_waste_date']
            : '');
    }

}
