<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    //
   public function user(){
        return response()->json(UserModel::get(),200);
   }
   public function userSave(Request $request){
        $user = UserModel::create($request->all());
        return response()->json($user,201);
   }
}
