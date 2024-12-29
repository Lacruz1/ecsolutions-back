<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function login(Request $request){
        try {
            $user="eduard";
            $password="1234";
            $type="admin";

            if ($user == $request["user"] && $password == $request["password"]) {
                return response()->json([
                    "message"=> "El usuario se ha autenticado exitosamente",
                    "type"=> "Admin"
                ],200);
            } else {
                return response()->json([
                    "message"=> "El usuario no existe"
                ],200);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }       
    }
}
