<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Company;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CompaniesController extends Controller
{
    
    function register(){
      return view('registerCompany');
    }
    function doregister(){
      $this->validate(request(),[
        'name' => 'Required',
        'email' => 'Required|email',
        'password' => 'Required|min:4'
    ]);
    $user=User::create(request()->all());
          
      if($user instanceof User )
      {
          return redirect()->route('loginCompany')->with('registerSuccess',true);
      }
      else{
          return redirect()->back()->with('registerError',true);
      }


    }
    function login(){
    return view('loginCompany');
    }
    function dologin(){
      $this->validate(request(),[
        'email' => 'Required|email',
        ]);

        if(Auth::attempt(['email'=>request()->input('email'),'password'=>request()->input('password') ]))
        {
            return redirect()->route('companyDashboard');
        }
        else{
            return redirect()->back()->with('loginError',true);
        }
    }
    function dashboard(){
       $developers=User::where('role','D')->get();
       
      //  foreach($developers as $developer){
      //       dd($developer->topics);
      //  }
      return view ('companies.dashboard',compact('developers'));
    }
     public function logout(){
      Auth::logout();
      return redirect()->route('index');
     }
     public function profile(){
       return view('companies.profile');
     }
     public function profileUpdate(){     
        
      $user=User::find(Auth::user()->id);
      if(request()->input('phone') == '' )
      {
        $phone=0 ; 
      } 
      else{
        $phone=request()->input('phone');
      }
        echo $phone;
      $user->update(['name' => request()->input('name'),'phone' => $phone ]);
      if($user instanceof User)
      {
          return redirect()->route('profileCompany')->with('ChangesSuccessfully',true);
      }
  }

}
