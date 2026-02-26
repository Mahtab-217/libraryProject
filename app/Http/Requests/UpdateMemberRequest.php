<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            "name"=>"required|string|max:30|min:5",
            "email"=>"required|string|max:80|min:10",
            "whatsApp_number"=>"nullable|string|max:30|min:5",
            "adress"=>"nullable|string|max:50|min:5",
            "membership_date"=>"nullable|integer|max:50",
        ];
    }
}
