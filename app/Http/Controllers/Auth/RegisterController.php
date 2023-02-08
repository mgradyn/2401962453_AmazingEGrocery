<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Account;
use App\Models\Gender;
use App\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'first_name' => ['required', 'string', 'alpha_dash', 'max:25'],
            'last_name' => ['required', 'string', 'alpha_dash', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:accounts'],
            'role' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'display_picture' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'password' => ['required', 'string', Password::min(8), Password::min(1)->numbers(), 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Account
     */
    protected function create(array $data)
    {
        $request = app('request');
        $gender_id = Gender::where('gender_desc',$data['gender']) -> first()->gender_id;
        $role_id = Role::where('role_name',$data['role']) -> first()->role_id;

        $file = $request->file('display_picture');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->storeAs('account/display_picture', $filename);

        return Account::create([
            'role_id' => $role_id,
            'gender_id' => $gender_id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'display_picture_link' => $filename,
            'password' => Hash::make($data['password']),
        ]);

    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

        
    //     event(new Registered($user = $this->create($request->all())));

    //     $this->guard()->login($user);

    //     if ($response = $this->registered($request, $user)) {
    //         return $response;
    //     }

    //     return $request->wantsJson()
    //                 ? new JsonResponse([], 201)
    //                 : redirect(route('home'))->with('status-success', 'Registered successfully');
    // }
}
