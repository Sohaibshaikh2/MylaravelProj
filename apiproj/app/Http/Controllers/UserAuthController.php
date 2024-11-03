<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signup(Request $req){
        $input=$req->all();
        $input['password']=bcrypt($input['password']);
        $users=User::create($input);
        $success['token']=$users->createToken('MyApp')->plainTextToken;
        $users['name']=$users->name;

        return['sucess'=>true,"result"=>$success,"msg"=>"user Register sucessfuly"];

    }


    public function login(Request $req){

        $users=User::where('email',$req->email)->first();
        if(!$users||!Hash::check($req->password,$users->password)){
            return["result"=>"User Not found","Sucess"=>false];
        }
        $success['token']=$users->createToken('MyApp')->plainTextToken;
        $users['name']=$users->name;

        return['sucess'=>true,"result"=>$success,"msg"=>"user Login sucessfuly"];

    }
}
