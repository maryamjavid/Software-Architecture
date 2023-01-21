@extends('layouts.header')
@section('content')
 <style>
    h3{
        text-align: center;
        color: #39424e;
        font-weight: 700;
        font-size: 29px;
        line-height: 1.4;
        margin-top:50px;
    }
    p{
        text-align:center;
        font-size: 17px;
        color: #3e3e3e;
    }
 </style>
 <h3>For <span style="color:#097BBF">Developers</span></h3>
 <p>Practice coding, prepare for interviews, and get hired.</p>
<div class="modalRegister">
       <div class="title clearfix">
           <a href="{{ route('registerDeveloper') }}" class="register">Sign Up</a>
           <a href="{{ route('loginDeveloper') }}" class="login">Login</a>
       </div>
       <div class="content">
           @include('partials.errors')
           
           <form action="" method="post">
               {{ csrf_field() }}
              <input type="text" placeholder="First Name & Last Name" name="name">
              <input type="text" placeholder="Email" name="email">
              <input type="password" placeholder="Password" name="password">
              <input name="role" type="hidden" value="D">
              <input type="submit" value="Create An Account"/>
            </form>
       </div>
</div>
@endsection