<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function SignUp(){
        return view('auth.register');
    }
    public function SignUpSubmit(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$/',
        ]);
        $input=$request->all();
        $input['password']=Hash::make($request->password);
        $res=User::create($input);
        $res->save();
        if($res)
        return redirect('/signin');
    }
    public function SignIn(){
        return view('auth.login');
    }
    public function SignInSubmit(Request $request){

        $request->validate([
            'name_email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt(['name' => $request->name_email,'password' =>$request->password])){
            return redirect('/');
        }elseif(Auth::attempt(['email'=>$request->name_email, 'password' => $request->password])){
            return redirect('/');
        } else {
            return redirect('/signin');
        }
    }
    public function LogOut(){
        Auth::logout();
        return redirect('/signin');
    }

}
