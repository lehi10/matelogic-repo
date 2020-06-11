<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Student;
use App\Stage;
use App\IndentityQuestions;
use App\Teacher;
use App\Interest;
use App\Valoration;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => [
                function ($attribute, $value, $fail) {
                    if ($value!="" && Teacher::select('user_id')->where('user_id',$value)->count()<1) {
                        $fail($attribute.' is invalid.');
                    }
                },
            ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        
        // Si es un estudiante
        if($data['role']==0){


                $user =User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'username' => $data['username'],
                    'password' => Hash::make($data['password']),
                    'role' => $data['role'],
        
                ]);

                $id_user = User::select('id', 'email')->where('email',$data['email'])->get();
                
                $student = new Student;
                $student->user_id    = $id_user[0]['id'];
                $student->teacher_id = $data['code'];
                $student->save();
                
                $questions = new IndentityQuestions;
                $questions->user_id    = $id_user[0]['id'];
                $questions->teacher_id = $data['code'];
                $questions->save();

                $interest = new Interest;
                $interest->user_id    = $id_user[0]['id'];
                $interest->teacher_id = $data['code'];
                $interest->save();

                $valoration = new Valoration;
                $valoration->user_id    = $id_user[0]['id'];
                $valoration->teacher_id = $data['code'];
                $valoration->save();


                $valoration = new Stage;
                $valoration->user_id    = $id_user[0]['id'];
                $valoration->teacher_id = $data['code'];
                $valoration->save();
        }
        //Si es un maestro
        else{
            $user =User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'username' => $data['username'],
                'role' => $data['role'],
    
            ]);

            $id_user = User::select('id', 'email')->where('email',$data['email'])->get();
            
            $teacher = new Teacher;

            $teacher->user_id = $id_user[0]['id'];
            
            $teacher->save();
        }

    
        return $user;
        

    }
}
