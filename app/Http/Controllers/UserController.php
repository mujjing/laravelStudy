<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(){
        $this -> middleware('auth');
        $this -> middleware('can') -> only('show');
    }
    public function show($id){
        return $id;
    }
    public function edit($id){
        return 'Edit';
    }



}
