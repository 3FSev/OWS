<?php

namespace App\Http\Controllers\Auth;

use Log;
use App\Models\User;
use App\Models\District;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\ValidationException;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'district' => ['required', 'exists:district,id'],
            'department' => ['required', 'exists:department,id'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'district' => 'required|numeric',
            'department' => 'required|numeric',
            'password' => [
                'required',
                'string',
                'min:6',
                'confirmed', // You may add 'confirmed' rule if you have password confirmation field in your form
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]+$/',
            ],
        ];
        
        // Define custom validation messages
        $messages = [
            'password.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, one number, and one special character.',
        ];
        
        // Validate the input data
        $validator = Validator::make($data, $rules, $messages);
        
        // Check if the validation fails
        if ($validator->fails()) {
            dd($validator->errors());
            // Throw a validation exception
            throw ValidationException::withMessages($validator->errors()->toArray());
        }
        
        // If validation passes, create the user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'district_id' => $data['district'],
            'department_id' => $data['department'],
            'password' => Hash::make($data['password']),
        ]);

        // Notify superusers
        // $superusers = User::where('role_id', 3)->get();

        // foreach ($superusers as $superuser) {
        //     try {
        //         $superuser->notify(new NewUserNotification($user));
        //         Log::info('Notification sent to superuser: ' . $superuser->id);
        //     } catch (\Exception $e) {
        //         Log::error('Error sending notification: ' . $e->getMessage());
        //     }
        // }

        // Return the created user
        return $user;
    }

    public function showRegistrationForm()
    {
        $departments = Department::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        return view('auth.register', compact('departments','districts'));
    }
}
