<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Students;
use Illuminate\support\facades\Hash;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    // public function posts(){
    //     return view('posts');
    // }



    public function login(Request $request){
        $validateData = $request->validate([
        'email' => 'required|min:2',
        'password' => 'required|min:4'
        ]);

        $std_info = Students::where('email', '=', $request->email)->first();

        if(!$std_info){
            return back()->with('fail','User not found...');
        }else{
            if(hash::check($request->password, $std_info->password)){
                $request->session()->put('loggedUser', $std_info);
                return redirect('home');
            }else{
                return  back()->with('fail','Incorrect password');
            }
        }
    }

    public function signup(){
        return view('signup');
    }


    public function add_student(Request $request){
        $validateData = $request->validate([
            'sn'=>'integer|required:min:2',
            'fname'=>'required|min:2',
            'mname'=>'',
            'lname'=>'required|min:2',
            'course'=>'required|min:2',
            'email'=>'required|min:2|',
            'password'=>'required|min:4',



        ]);

        $student = new Students;
        $student->sn = $request->sn;
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->lname = $request->lname;
        $student->course = $request->course;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);

        $save = $student->save();

        if($save){
            return back()->with('success', ' New student have been registered');

        }else{
            return back()->with('fail', 'Error: Something went wrong..');
        }


    }




}
