<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:comics,|min:5|max:100',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:8',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:80',
        ];
    }
}
