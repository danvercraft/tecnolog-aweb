<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'name' => ['nullable', 'max:255', 'unique:countries'],
                    'status' => ['nullable', 'boolean'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => ['nullable', 'max:255', 'unique:countries,name,'.$this->route()->country->id],
                    'status' => ['nullable', 'boolean'],
                ];
            }
            default: break;
        }
    }
}
