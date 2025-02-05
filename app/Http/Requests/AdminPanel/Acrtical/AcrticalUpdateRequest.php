<?php

namespace App\Http\Requests\AdminPanel\Acrtical;

use Illuminate\Foundation\Http\FormRequest;

class AcrticalUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_acrtical' => [ 'required' , 'string', 'max:100' ],
            'description' => [ 'required', 'string' ],
            //'images.*' => [ 'image' , 'mimes:png,jpeg,jpg ' ],
        ];;
    }
}
