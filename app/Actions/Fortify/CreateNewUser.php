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
     * @param  array  $input
     * @return \App\Models\User
     */
    // public function create(array $input)
    // {

    //     Validator::make($input, [
    //         'first_name' => ['required', 'string', 'max:255'],
    //         'last_name' => ['required', 'string', 'max:255'],
    //         // 'other_names' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'phone' => ['required', 'string','max:11', 'min:11', 'unique:users'],
    //         'referral_name' => ['required_with:referral'],
    //         'referral_email' => ['required_with:referral'],
    //         'password' => $this->passwordRules(),
    //         'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    //     ])->validate();

    //     return User::create([
    //         'first_name' => $input['first_name'],
    //         'last_name' => $input['last_name'],
    //         // 'other_names' => $input['other_names'],
    //         'email' => $input['email'],
    //         'phone' => $input['phone'],
    //         'password' => Hash::make($input['password']),
    //         'referral_name' => $input['referral_name'],
    //         'referral_email' => $input['referral_email'],
    //     ]);
    // }


    public function create(array $input)
    {

        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            // 'other_names' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:11', 'min:11', 'unique:users'],
            'referral_name' => ['required_with:referral'],
            'referral_email' => ['required_with:referral'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            // 'other_names' => $input['other_names'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
            'referral_name' => $input['referral_name'],
            'referral_email' => $input['referral_email'],
        ]);
        /////////////////////////
    }
}
