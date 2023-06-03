<?php

namespace App\Http\Controllers;

use App\Mail\Studentnotification;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function save_student(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'photo' => 'required',
            'email' => 'required|email|unique:users,email',//to validate email column and table required
            'password' => 'required',
        ]);

//         Check validation failure
        if (count($validator->errors())) {
            return redirect('register')->with('message', $validator->errors());
        }


        $student = new User();
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->password = bcrypt($request->password);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            $filename = $file->getClientOriginalName(); // Get the original filename with extension

            $file->storeAs('public/Student', $filename); // Store the file with the original filename in the 'public/Student' directory

            // Set the filename to the student's 'photo' property
        }
        $student->photo = $filename;

        $student->save();
        $data = [
            'subject' => 'Student registration',
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address
        ];
        dispatch(new \App\Jobs\mail($data));

        return redirect('welcome')->with('message', 'Successfully registered');

    }

    public function login_user(Request $request)
    {
//        $data = request()->all();
//        $rules = [
//            'email'=>'required',
//            'password'=>'required'
//        ];
//        $valid = Validator::make($data,$rules);
//        if (count($valid->errors())) {
//
//                return view('login')->with('errors','invalid data');
//
//        }
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
//            $token = request()->user()->createToken('api_token_at_'.now()->toDateTimeString());
            return redirect(route('dashboard'));
        } else {
            return ($password);
        }

    }

    public function dashboard()
    {

        if (auth::user()) {
            $email=auth::user()->email;
            return view('dashboard', compact('email'));
        }
        else{
            return ('login');
        }

    }

}
