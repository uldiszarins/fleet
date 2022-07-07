<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Truck extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'id',
        'truck_type',
        'truck_number',
        'truck_make',
        'truck_model',
        'truck_year',
        'truck_vin_number',
        'truck_technical_inspection_date',
        'truck_vignette_date',
        'truck_vignette_number',
        'truck_insurance_date',
        'truck_insurance_number',
        'truck_cc_insurance_date',
        'truck_cc_insurance_number',
        'truck_transportation_date',
        'truck_transportation_number',
        'truck_waste_date',
        'truck_waste_number',
    ];

    public const VALIDATION_RULES = [
        'truck_type' => [
            'required',
            'integer',
        ],
        'truck_number' => [
            'string',
            'required',
            'min:3',
            'max:10',
        ],
        'truck_make' => [
            'string',
            'required',
            'min:3',
            'max:100',
        ],
        'truck_model' => [
            'string',
            'max:100',
        ],
        'truck_year' => [
            'required',
            'min:4',
            'max:4',
        ],
        'truck_vin_number' => [
            'string',
            'max:100',
        ],
        'truck_technical_inspection_date' => [
            'nullable',
            'date',
        ],
        'truck_vignette_date' => [
            'nullable',
            'date',
            'required_with:truck_vignette_number',
        ],
        'truck_vignette_number' => [
            'string',
            'max:100',
            'required_with:truck_vignette_date',
        ],
        'truck_insurance_date' => [
            'nullable',
            'date',
            'required_with:truck_insurance_number',
        ],
        'truck_insurance_number' => [
            'string',
            'max:100',
            'required_with:truck_insurance_date',
        ],
        'truck_cc_insurance_date' => [
            'nullable',
            'date',
            'required_with:truck_cc_insurance_number',
        ],
        'truck_cc_insurance_number' => [
            'string',
            'max:100',
            'required_with:truck_cc_insurance_date',
        ],
        'truck_transportation_date' => [
            'nullable',
            'date',
            'required_with:truck_transportation_number',
        ],
        'truck_transportation_number' => [
            'string',
            'max:100',
            'required_with:truck_transportation_date',
        ],
        'truck_waste_date' => [
            'nullable',
            'date',
            'required_with:truck_waste_number',
        ],
        'truck_waste_number' => [
            'string',
            'max:100',
            'required_with:truck_waste_date',
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

    public function getTruckVignetteDateAttribute()
    {
        return ($this->attributes['truck_vignette_date'] != '0000-00-00' ?
            $this->attributes['truck_vignette_date']
            : '');
    }

    public function getTruckInsuranceDateAttribute()
    {
        return ($this->attributes['truck_insurance_date'] != '0000-00-00' ?
            $this->attributes['truck_insurance_date']
            : '');
    }

    public function getTruckCcInsuranceDateAttribute()
    {
        return ($this->attributes['truck_cc_insurance_date'] != '0000-00-00' ?
            $this->attributes['truck_cc_insurance_date']
            : '');
    }

    public function getTruckTransportationDateAttribute()
    {
        return ($this->attributes['truck_transportation_date'] != '0000-00-00' ?
            $this->attributes['truck_transportation_date']
            : '');
    }

    public function getTruckWasteDateAttribute()
    {
        return ($this->attributes['truck_waste_date'] != '0000-00-00' ?
            $this->attributes['truck_waste_date']
            : '');
    }

}
