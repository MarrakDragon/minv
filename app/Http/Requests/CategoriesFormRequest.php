<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CategoriesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'nullable|string|min:0|max:255',
            'description' => 'nullable|string|min:0|max:16777215',
            'type' => 'required|numeric|min:-2147483648|max:2147483647',
            '_lft' => 'required|numeric|min:0|max:4294967295',
            '_rgt' => 'required|numeric|min:0|max:4294967295',
            'parent_id' => 'nullable',
        ];

        return $rules;
    }
    
    /**
     * Get the request's data from the request.
     *
     * 
     * @return array
     */
    public function getData()
    {
        $data = $this->only(['name', 'description', 'type', '_lft', '_rgt', 'parent_id']);



        return $data;
    }

}