<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:50',
            'type' => 'required|min:3|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'title.requred' => 'Il Titolo è un campo obbligatorio',
            'title.min' => 'Il Titolo deve avere un minimo di :min caratteri',
            'title.max' => 'Il Titolo deve avere un massimo di :max caratteri',
            'price.requred' => 'Il Prezzo è un campo obbligatorio',
            'price.min' => 'Il Prezzo deve avere un minimo di :min caratteri',
            'price.max' => 'Il Prezzo deve avere un massimo di :max caratteri',
            'series.requred' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve avere un minimo di :min caratteri',
            'series.max' => 'La serie deve avere un massimo di :max caratteri',
            'type.requred' => 'Il Tipo è un campo obbligatorio',
            'type.min' => 'Il Tipo deve avere un minimo di :min caratteri',
            'type.max' => 'Il Tipo deve avere un massimo di :max caratteri',
        ];
    }

}
