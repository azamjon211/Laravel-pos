<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "Bu birinchi laravel topshiriq";
    }
    public function show($name){
        return " ismi: ". $name;
    }
    public function create(){
        return view('users.create');
    }
    public function explain(Request $request, $user){
        return view('users.show', [
            'name'=>'A\'zamjon',
            'id'=>$user
        ]);
    }
    public function store(Request $request){
        if($request -> has('name')){
            echo "yes";
        }

    }
}
