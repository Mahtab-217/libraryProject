<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Stmt\TraitUse;

class bookInsertion extends FormRequest
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
            "title"=>"required|string|min:4",
            "isbn"=>"required|string",
            "description"=>"nullable|string",
            "published_at"=>"required|date",
            "total_copies"=>"nullable|integer|max:300",
            "cover_image"=>"required|string",
            "price"=>"required|numeric",
            "author_id"=>"required|integer|exists:authors,id",
            "genra"=>"required|string",
        ];
    }
}
