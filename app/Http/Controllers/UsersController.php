<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
      public function index(){
            $users=User::all();
         return view('user.index',compact('users'));
      }
      public function create(){
         return view('user.create'); 
      } 

      public function store(){
        
        $this->validate(request(),[
           'name' => 'Required',
           'password' => 'Required|min:6|max:12',
           'email' => 'Required|email'
        ]);

         $users=User::create(request()->all());
         if($users instanceof User)
         {
           return
            redirect()->route('user.create')->with('success',true);
         }
      }

      public function delete($user_id)
      {
         $user=User::find($user_id);
         $user->delete();
         return redirect()->route('user.index')->with('delete',true);
      }

      public function edit($user_id){
            $user=User::find($user_id);

            return view('user.edit',compact('user'));
      }

      public function update($user_id){
           
         $inputs=request()->except('_token');
           if(request()->input('password') == '')
           {
              unset($inputs['password']);
           }

           $user=User::find($user_id);
           $user->update($inputs);
           return redirect()->route('user.index');
      }

      public function register(){
         return view('user.register');
      }
      public function doregister(){
          $this->validate(request(),[
             'email' => 'required|Email',
             'password' => 'required|min:4',
             'name' => 'required'
          ]);
          $user=User::create(request()->all());
          if($user instanceof User)
          {
             return redirect()->route('user.index')->with('registerSuccess',true);
          }
      }
      public function login(){
            return view('user.login');
      }
      public function dologin(Request $request){
             
        $this->validate(request(),[
           'email' =>  'required',
           'password' =>  'required'
        ]);


         if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password') ])){
            return redirect()->route('user.index');
         }
        
           return redirect()->back()->with('errorLogin',true);
         
      }

      public function logout(){
         Auth::logout();
         return redirect()->route('user.login');
      }
}
