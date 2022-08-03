<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsersRequest extends FormRequest
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
            'file' => 'mimes:docx,csv,txt,xlx,xls,pdf|max:2048',
            'image' => 'mimes:jpg,jpeg,png,svg|max:3072',
            'name' => 'required|max:100|regex:/(^([a-zA-Z&#@*]+)(\d+)?$)/u',
            'surname'=>'required|max:100|regex:/(^([a-zA-Z&#@*]+)(\d+)?$)/u',
            'email' => 'required|email|max:191|',
            'phone' => 'required|min:10|max:20',
            'password' => 'sometimes|min:6|required_with:password-check|same:password-check',
            'password-check' => 'sometimes|min:6',
            'status_id' => 'sometimes|required|integer',
            'role' => 'sometimes|required',
            'note' =>'sometimes|required'
        ];
    }
}
