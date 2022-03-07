<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
     * School form validate request
     * @return array
     */
    public function rules()
    {
        return [
            'schName' => 'required|min:5',
            'address' => 'required',
        ];
    }


    public function message(){
        
        return [
            'schName.required' => 'school name field is required!',
            'address.required' => 'address field is required!',
        ];
    }
}
