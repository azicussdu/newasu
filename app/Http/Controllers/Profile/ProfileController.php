<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function change_password(){
        return view('profile.change_password');
    }
    public function update_password(Request $request){
        $this->validate($request, [
           'old_password'=>'required|min:6',
           'new_password'=>'required|min:6',
           'confirm_password'=>'required|min:6|same:new_password',
        ]);
        $current_user=auth()->user();
        if(Hash::check($request->old_password,$current_user->password)){
            $current_user->update([
                'password'=>Hash::make($request->new_password)
            ]);
            return redirect()->back()->with('info', 'Пароль успешно изменен!');
        }
        else{
            return redirect()->back()->with('fail', 'Неверный пароль');
        }
    }
}
