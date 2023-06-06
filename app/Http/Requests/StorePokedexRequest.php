<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokedexRequest extends FormRequest
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
            'name' => 'required|min:2|max:40',
            'type_1' => 'required',
            'type_2' => 'nullable',
            'hp' => 'nullable',
            'attack'=>'nullable',
            'defense'=>'nullable',
            'speed'=>'nullable',
            'special'=>'nullable',
            'gif'=> 'required|max:355',
            'png' =>'nullable',
            'description'=>'required|max:1500',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'You must insert a name for this Pokemon!',
            'name.min' => 'This name must be longer more than 2 characters',
            'name.max' => 'This name cannot be longer than 40 characters',
            'type_1.required' => 'You must insert at least one type for this Pokemon!',
            'gif.required' => 'You must insert a image path for this Pokemon!',
            'gif.max' => 'This image path cannot be longer than 355 characters',
            'description.required' => 'You must insert a description for this Pokemon!',
            'description.max' => 'This description cannot be longer than 1500 characters',
        ];
    }
}
