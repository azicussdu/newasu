<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
    public function login(Request $request){
        $validate=$this->validate($request, [
            'login'=>'required',
            'password'=>'required|min:6',
        ]);
        if(auth()->attempt($validate)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->withErrors(['login'=>'Пользователь не найден, либо данные введены не правильно']);
        }
    }
    public function showRegisterForm(){
        return view('auth.register');
    }

//    public function register(Request $request){
//
//        $this->validate($request,[
//            'email'=>'required|email|unique:users',
//            'password'=>'required|min:6|confirmed',
//            'lastname'=>'required',
//            'firstname'=>'required',
//            'tel'=>'required',
//            'birthdate'=>'required|date',
//            'iin'=>'required|unique:users'
//        ]);
//        $user=User::create([
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//            'lastname' => $request->lastname,
//            'firstname' => $request->firstname,
//            'patronymic' => $request->patronymic,
//            'tel' => $request->tel,
//            'birthdate' => $request->birthdate,
//            'iin' => $request->iin
//        ]);
//
//        $user->assignRole('adviser');
//        if($user){
//            return redirect()->route('login')->with('info', 'Вы успешно зарегистрировались');
//        }
//        else{
//            return redirect()->back()->with('fail', 'Ошибка');
//        }
//    }
//    public function username()
//    {
//        return 'login';
//    }

}
