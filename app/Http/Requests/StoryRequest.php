<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoryRequest extends FormRequest
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
            'title' => [
                'required', 'min:10', 'max:40',
                function ($attributes, $value, $fail) {
                    if ($value == 'Dummy Title') {
                        $fail($attributes . ' is not valid.');
                    }
                },
                Rule::unique('stories'),
            ],
            'body' => ['required', 'min:50'],
            'type' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'required' => 'fuck you! enter or select this :attribute',
            'title.required' =>
            'You must enter :attribute.',
            'body.required' =>
            'You must enter :attribute.',
            'type.required' =>
            'You must select :attribute.',
            'status.required' => 'You must choose :attribute.',
        ];
    }
}
