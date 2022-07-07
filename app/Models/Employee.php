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
        'empl_surname' => [
            'required',
            'string',
            'min:3',
            'max:100',
        ],
        'empl_phone' => [
            'string',
            'max:8',
        ],
        'empl_address' => [
            'string',
            'max:100',
        ],
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*']);
    }

    public function getEmplDriverLicenseDateAttribute()
    {
        return ($this->attributes['empl_driver_license_date'] != '0000-00-00' ?
            $this->attributes['empl_driver_license_date']
            : '');
    }

    public function getEmplHealthDateAttribute()
    {
        return ($this->attributes['empl_health_date'] != '0000-00-00' ?
            $this->attributes['empl_health_date']
            : '');
    }
    public function getEmplInsuranceDateAttribute()
    {
        return ($this->attributes['empl_insurance_date'] != '0000-00-00' ?
            $this->attributes['empl_insurance_date']
            : '');
    }
    public function getEmplWorkSafetyDateAttribute()
    {
        return ($this->attributes['empl_work_safety_date'] != '0000-00-00' ?
            $this->attributes['empl_work_safety_date']
            : '');
    }

}
