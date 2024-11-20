<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'role' => ['required', 'in:teacher,establishment'],
            'name' => ['required_if:role,teacher', 'string', 'max:255'],
            'establishment_name' => ['required_if:role,establishment', 'string', 'max:255'],
            'establishment_email' => ['required_if:role,establishment', 'string', 'email', 'max:255', 'unique:users'],
            'email' => ['required_if:role,teacher', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['role'] === 'teacher' ? $input['name'] : $input['establishment_name'],
            'email' => $input['role'] === 'teacher' ? $input['email'] : $input['establishment_email'],
            'password' => Hash::make($input['password']),
            'role' => $input['role'],
        ]);
    }
}
