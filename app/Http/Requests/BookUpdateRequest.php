<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
            //
<<<<<<< HEAD
            "title"=> "nullable|string|min:7",
            "isbn"=> "nullable|string",
            "description"=> "nullable|string",
            "published_at"=> "nullable|date",
            "total_copies"=> "nullable|integer|max:200",
            "cover_image"=> "nullable|string",
            "price"=> "nullable|numeric",
            "author_id"=> "nullable|integer|exists:author,id",
            "genra"=> "nullable|string",
=======
              "title"=>"nullable|string|min:4",
            "isbn"=>"nullable|string",
            "description"=>"nullable|string",
            "published_at"=>"nullable|date",
            "total_copies"=>"nullable|integer|max:300",
            "cover_image"=>"nullable|string",
            "price"=>"nullable|numeric",
            "author_id"=>"nullable|integer|exists:authors,id",
            "genra"=>"nullable|string",
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
        ];
    }
}
