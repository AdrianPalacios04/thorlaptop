<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Persona;
use App\Models\Pais;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();
        
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'celular'=>$input['celular'],
            'id_pais'=>$input['codpais'],
            'acepto'=>$input['acepto'],
             'autorizo'=>$input['autorizo'],
           
        ]);  
        $persona = Persona::create([
            'nombre'=>$input['nombre'],
            'apellido'=>$input['apellido'],
            'dni'=>$input['dni'],
            'dnacimiento'=>$input['dnacimiento'],
            'sexo'=>$input['sexo'],
            'id_users'=> $user->id
         ]);

         return $user;  
    }
    // public function Pais()
    // {
    //     $pais = DB::select('select * from pais');
    //     // dd($user);
    //     return View('auth.register')->with('pais',$pais);
    // }
}