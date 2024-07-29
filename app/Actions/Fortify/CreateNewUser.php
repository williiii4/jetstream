<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;

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
        if (isset($input['referral_from'])) {

            error_log("REGISTRANDO UN USUARIO REFERIDO  \n");
            //error_log("REQUEST REFERRED: " . json_encode($input) . " \n");
            error_log("REQUEST REFERRED: " . $input['referral_from'] . " \n");

            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',            
                'referral_from' => ['required', 'string', 'max:255'],
    
            ])->validate();
            
            $new_user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'referred_token' => Str::uuid(),
                'referral_from' => $input['referral_from'],
                'phone' => $input['phone'],
                'wallet' => $input['wallet'],
            ]);

            error_log("NEW USER: " . json_encode($new_user) . " \n");


            return $new_user;

        } else {

            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',    
            ])->validate();
            
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'referred_token' => Str::uuid(),
                'phone' => $input['phone'],
                'wallet' => $input['wallet'],                                
            ]);

        }
    }
}
