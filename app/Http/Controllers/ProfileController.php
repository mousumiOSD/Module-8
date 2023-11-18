<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";
    
    $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

      return "hellow id $id, name $name, age $age";
    }

    function hello(){
        $Name='access_token';
        $Value='123-XYZ';
        $minutes=1;
        $path='/';
        $domain= $_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;

        return response("Cookie Set Success")->cookie(
            $Name,$Value,$minutes,$path,$domain,$secure,$httpOnly
        );
    }


       
    

    }
        

       

    



