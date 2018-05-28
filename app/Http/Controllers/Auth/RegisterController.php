<?php

namespace Miomo\Http\Controllers\Auth;
use Miomo\User;
use Miomo\Datos_Usuario;
use Miomo\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use Miomo\Rules\Uppercase;
use Miomo\Rules\CheckAge;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/comprobar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:12|confirmed',
            'g-recaptcha-response' => 'required|recaptcha',
            'apellidos' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
            'celular' => 'required',
            'ciudad' => 'required',
            'fecha_nacimiento' => [
                'required',function($attribute, $value, $fail) {
                    $edad= intval((strtotime("now")-strtotime($value))/31536000);
                    if ($edad<18) {
                        return $fail(' You need to be of legal age.');
                    }
                },
            ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Miomo\User
     */
    protected function create(Array $data)
    {
        $data['confirmation_code'] = str_random(25);
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_code' => $data['confirmation_code'],
        ]);

        $id_user=$user->id;
        $id_rol=3;
        $datosUsuario=Datos_Usuario::create([
            'nombre'=>$data['nombre'],
            'apellidos'=>$data['apellidos'],
            'pais'=>$data['pais'],
            'ciudad'=>$data['ciudad'],
            'fecha_nacimiento'=>$data['fecha_nacimiento'],
            'celular'=>$data['celular'],
            'correo'=>$data['email'],
            'id_usuario'=>$id_user,
            'id_rol' => $id_rol]);

        Mail::send('emails.confirmation_code', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo');
        });

        return $user;
    }


}
