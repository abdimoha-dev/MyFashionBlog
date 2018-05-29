<?php

namespace App\Http\Requests\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SaveArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'    => 'required',
            'contents' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required'   => 'please enter the tittle',
            'contents.required' => 'please enter the content',
        ];
    }
}
