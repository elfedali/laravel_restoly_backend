<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusinessRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "slug" => "required|string|unique:businesses,slug",
            "description" => "nullable|string",
            "phone_one" => "nullable|string",
            "phone_two" => "nullable|string",

            "address" => "nullable|string",
            "city" => "nullable|string",
            "state" => "nullable|string",
            "zip" => "nullable|string",
            "country" => "nullable|string",
            "logo" => "nullable|string",

            "website" => "nullable|string",
            "facebook" => "nullable|string",
            "twitter" => "nullable|string",
            "instagram" => "nullable|string",
            "linkedin" => "nullable|string",
            "youtube" => "nullable|string",

            "user_id" => "required|integer|exists:users,id",
            "category_id" => "required|integer|exists:categories,id"
        ];
    }
}
