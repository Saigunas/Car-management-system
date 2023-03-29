<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'name.required' => __('validation.required', ['attribute' => __('validation.attributes.name')]),
            'name.between' => __('validation.between.string', ['attribute' => __('validation.attributes.name'), 'min' => 3, 'max' => 32]),
            'surname.required' => __('validation.required', ['attribute' => __('validation.attributes.surname')]),
            'surname.between' => __('validation.between.string', ['attribute' => __('validation.attributes.surname'), 'min' => 3, 'max' => 32]),
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
            'name'=>'required|between:3,32',
            'surname'=>'required|between:3,32',
        ];
    }
}
