<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class homeController extends Controller
{
    //
    public function index(){

        $std_list = Students::orderby('lname','asc')->orderby('fname' , 'asc')->orderby('mname','asc')->orderby('course','asc')->get();

        return view ('students_list', compact('std_list'));
    }

    public function logout(){
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/');
        }
    }

    public function posts(){
        return view('posts');
    }

    public function homepage(){
        return view('homepage');
    }

    // public function updateview($id){
    //     return view('update_studentView');
    // }



}

