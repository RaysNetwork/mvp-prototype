<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request as R;
use Illuminate\View\View;

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
    protected $redirectTo = '/home';

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
           // 'name' => 'required|string|max:255',
          //  'email' => 'required|string|email|max:255|unique:users',
          //  'password' => 'required|string|min:6|confirmed',
            'digital_id' => 'required|numeric|confirmed',
            'string_input' => 'required'
        ]);
    }

    public function register(R $request) {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            /*$this->throwValidationException(
                $request, $validator
            );*/
            return ['errors' => $validator->errors()];
        }

        //$user = $this->create($request->all());


        $private_key = sha1($request->string_input);

        $x =  [
            'address' => sha1($private_key),
            'public_key' => sha1($private_key),
            'private_key' => $private_key
        ];

        $user = new User;
        $user->digital_id = $request->digital_id;
        $user->public_key = $x['public_key'];
        $user->private_address = sha1("shahid". $x['public_key']);
        $user->save();

        return View('auth.register', $x);

        //return redirect('/login')->with('message', 'We sent a comfirmation email to your email, please click on link inside before login');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        die("CCCCCCCC");
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
