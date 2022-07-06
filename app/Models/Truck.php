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
        'b_kods',
        'b_nos',
        'b_no',
        'b_lidz'
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
        'b_nos' => [
            'required',
            'min:3',
            'max:45'
        ],
        'b_kods' => [
            'required',
            'min:2',
            'max:15'
        ],
        'b_no' => [
            'required',
            'date'
        ],
        'b_lidz' => [
            'date',
            'after:b_no'
        ]
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*']);
    }
}
