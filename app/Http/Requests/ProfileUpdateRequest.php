<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'qualification' => ['required', 'string', 'max:255'],
            'specialization' => ['required', 'string', 'max:255'],
            'intro' => ['required', 'string'],
            'years_of_experience' => ['required', 'string', 'max:25'],
            'location' => ['required', 'string', 'max:55'],
            'date_of_birth' => ['required', 'string', 'max:55'],
            'phone_number' => ['required', 'string', 'max:55'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ];
    }
}
