<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Model\Topic;
use App\Model\Topicuser;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class DevelopersController extends Controller
{
    public function register(){
        return view('registerDeveloper');
    }
    public function doregister(){
        $this->validate(request(),[
            'name' => 'Required',
            'email' => 'Required|email',
            'password' => 'Required|min:4'
        ]);
        
        
        $user=User::create(request()->all());
        
        if($user instanceof User )
        {
            return redirect()->route('loginDeveloper')->with('registerSuccess',true);
        }
        else{
            return redirect()->back()->with('registerError',true);
        }

         
        request()->all();
    }
    public function login(){
        return view('loginDeveloper');
    }
    public function dologin(){

        $this->validate(request(),[
            'email' => 'Required|email',
            'password' => 'Required|min:4'
        ]);

        if(Auth::attempt(['email'=>request()->input('email'),'password'=>request()->input('password') ]))
        {
            return redirect()->route('developerDashboard');
        }
        else{
            return redirect()->back()->with('loginError',true);
        }
    }

    public function dashboard(){
        //  $topicUser=Topicuser::where('user_id',Auth::user()->id)->get();
        //  dd($topic_id);
         $userId=Auth::user();
         $topicUser=$userId->topics;
         return view('developers.dashboard',compact('topicUser'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function profile(){
        return view('developers.profile');
    }
    public function profileUpdate(){
        
        
        $user=User::find(Auth::user()->id);
        $user->update(request()->all());
        if($user instanceof User)
        {
            return redirect()->route('profileDeveloper')->with('Changes Successfully',true);
        }
    }

    public function topic($category){
         $topics = DB::table('topics')->where('category',$category)->get();
         return view('developers.topic',compact('topics'));
    }
    public function action(){
        echo "dffddffddf";
    }
    public function challange($id){
       $challange=Topic::find($id); 
       return view('developers.challange',compact('challange'));
    }
    public function dochallange($topic_id){
        $this->validate(request(),[
         'option1'=>'required',
         'option2'=>'required',
         'option3'=>'required',
        ]);
        $bb=0;
        if( request()->input('option1') == 'option3-1' ){
           $bb+=1;
        };
        if(request()->input('option2') == 'option4-2'){
          $bb+=1; 
        };
        if(request()->input('option3') == 'option1-3'){
          $bb+=1; 
        };
            //  $score=($bb/3)*100;
                 $user_id=Auth::user()->id;
                 $topic=Topic::find($topic_id);
                $topic->users()->attach($user_id);
            //  $topicUser=Topicuser::create(['topic_id'=>$topic_id , 'user_id' => $user_id , 'score' => $score]);
            //  if($topicUser instanceof Topicuser){
                   return redirect()->route('developerDashboard');
            //  }
            //  else{
            //      return redirect()->back();
            //  }
    }
}
