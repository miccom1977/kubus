<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SwimmerRequest extends FormRequest
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
        return [
            'first_name' => 'required',
            'second_name' => 'required',
            'school_class_id' => 'required',
            'sex' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Podaj Imię zawodnika',
            'second_name.required' => 'Podaj Nazwisko zawodnika',
            'school_class_id.required' => 'Podaj Klasę zawodnika',
            'sex.required' => 'Podaj płeć zawodnika',
            'status.required' => 'Podaj status',
        ];
    }
}
