<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Truck extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'truck_type',
        'truck_number',
        'truck_make',
        'truck_type',
        'truck_model'
    ];

    public function setBNoAttribute($value)
    {
        $this->attributes['b_no'] = date("Y-m-d", strtotime($value));
    }

    public function setBLidzAttribute($value)
    {
        $this->attributes['b_lidz'] = ($value ? date("Y-m-d", strtotime($value)) : null);
    }

    public const VALIDATION_RULES = [
        'truck_number' => [
            'required',
            'min:3',
            'max:10'
        ],
        'truck_make' => [
            'required',
            'min:2',
            'max:100'
        ],
    ];

}
