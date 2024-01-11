<?php

namespace App\Http\Requests\Admin\Meter;

use Illuminate\Foundation\Http\FormRequest;

class AllocateMeterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // 'meter_type'
        // 'user_id'
        // 'meter_point_number'
        // 'meter_serial_number'
        // 'meter_reference'
        // 'status'
        return [
            'meter_type' => 'required',
            'user_id' => 'required',
            'meter_point_number' => 'required',
            'meter_serial_number' => 'required',
            'meter_reference' => 'required',

        ];
    }
}
