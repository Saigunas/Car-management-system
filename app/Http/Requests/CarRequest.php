<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
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

    public function messages()
    {
        return [
            'brand.required' => __('validation.required', ['attribute' => __('Brand')]),
            'brand.min' => __('validation.between.string', [
                'attribute' => __('validation.attributes.brand'),
                'min' => 3,
                'max' => 32,
            ]),
            'reg_number.regex' => __('validation.reg_number.regex'),
            'owner_id.required' => __('validation.required', ['attribute' => __('validation.attributes.owner')]),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|between:3,32',
            'reg_number' => 'regex:/^[a-zA-Z]{3}[0-9]{3}$/',
            'owner_id' => 'required',
        ];
    }
}
