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
           <a href="{{ route('registerDeveloper') }}" class="login">Sign Up</a>
           <a href="{{ route('loginDeveloper') }}" class="register">Login</a>
       </div>
       <div class="content">
           @include('partials.errors')
           @if(session('loginError'))
                <div class="alert alert-danger">
                    <p>User and Password are Wrong</p>
                </div>
           @endif
           @if(session('loginError'))
                    <p class="alert alert-danger">User and Password are Wrong</p>
           @endif
           <form action="" method="post">
              {{ csrf_field() }}
              <input type="text" placeholder="Email" name="email">
              <input type="password" placeholder="Password" name="password">
              <input type="submit" value="Login"/>
            </form>
       </div>
</div>
@endsection