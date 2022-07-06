<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Truck;

class TruckRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        $rules = Truck::VALIDATION_RULES;

        if ($this->getMethod() == 'POST') { // store
            $rules +=  ['b_nos' => [
                'min:5',
                'max:45',
                'unique:Modules\Classifiers\Entities\Bank',
            ]];
        } else { //update
            $rules +=  ['b_nos' => [
                'min:5',
                'max:45',
            ]];
        }

        return $rules;
    }
}
