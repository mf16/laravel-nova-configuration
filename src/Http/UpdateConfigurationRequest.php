<?php

namespace Inani\LaravelNovaConfiguration\Http;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConfigurationRequest extends FormRequest
{
    /**
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required',
            'key' => 'required|unique:laravel_nova_configurations,key,' . $this->id,
            'value' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'The key is required',
            'key.unique' => 'The key is already used',
            'value.unique' => 'The value is required',
        ];
    }
}