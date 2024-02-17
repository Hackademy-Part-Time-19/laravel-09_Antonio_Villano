<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'title'=>'required|max:50',
            'category'=>'required|max:40',
            'description'=> 'required|max:250',
            'body'=>'required|max:5000',
            'image'=>'nullable|mimes:png,jpg,jpeg'
        ];
    }
    public function messages()
    {
        return[
            'title.required'=>'il titolo deve esistere',
            'category.required'=>'la categoria deve essere inserita',
            'description.required'=>'la descrizione deve esistere',
            'body.required'=>'un testo minimo deve esistere',
            'title.max'=>'il titolo deve avere massimo 50 caratteri',
            'category.max'=>'la categoria deve avere massimo 40 caratteri',
            'description.max'=>'la descrizione deve avere massimo 250 caratteri',
            'body.max'=>'il testo deve avere massimo 5000 caratteri',
        ];
    }
}
