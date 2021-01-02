<?php

namespace App\Http\Controllers;

use App\Models\Webclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;

session_start();
class WebRegiController extends Controller
{
    public function index()
    {
        return view('simplepages.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'min:6|required_with:password_confirmation|same:password2',
            'password2' => 'min:6'
            ]);

            $userdata = Webclass::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password]);

            return response()->json($userdata);
    }

    public function indexlog(){

        return view('simplepages.login');
    }

    public function login(Request $request){

        //$userdata = Webclass::all();
        $result = Webclass::where('email', $request->email)->where('password', $request->password)->first();
        if(!$result){
            session::put('massage', 'Email or Password incorrect');
            return back();
        }else{
            session::put('name', $result->username);
            session::put('id', $result->id);

            return redirect()->to('/sample');
        }
    }

    public function logout(){
        Session::forget('name');
        Session::forget('id');
        return redirect()->to('/sample');
    }
}
