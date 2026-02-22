<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberInsertRequest extends FormRequest
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
            "name"=>"required|string|min:3|max:30",
            "email"=>"required|string|min:10|max:80",
            "wahtsApp_number"=>"nullable|min:8|max:20",
            "adress"=>"required|min:5|max:70",
            // "membership_date"=>"required|min:3|max:80",
        ];
    }
}
