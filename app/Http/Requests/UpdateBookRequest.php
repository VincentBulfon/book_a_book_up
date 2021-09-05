<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'thumbnail' => ['max:1024', 'mimes:jpeg,jpg'],
            'title'=> ['required', 'string'],
            'authors' => ['required', 'regex:/[A-z][a-z]+(,[A-z][a-z]+)*/'],
            'isbn' => ['required', 'regex:/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/'],
            'edition' => ['required', 'string'],
            'public_price'=> ['required', 'numeric','min:0'],
            'student_price'=> ['required', 'numeric','min:0'],
            'edition_note'=>['string', 'nullable','min:0'],
        ];
    }
}
