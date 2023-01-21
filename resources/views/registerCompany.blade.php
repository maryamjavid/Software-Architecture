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
 <h3>For <span style="color:#068932">Companies</span></h3>
 <p>Get started hiring with HackerRank</p>
<div class="modalRegister">
       <div class="title clearfix">
           <a href="{{ route('registerCompany') }}" class="register">Sign Up</a>
           <a href="{{ route('loginCompany') }}" class="login">Login</a>
       </div>
       <div class="content">
           <form action="" method="post">
               {{ csrf_field() }}
               @include('.partials.errors')
              <input type="text" placeholder="Name Company" name="name">
              <input type="text" placeholder="Email" name="email">
              <input type="password" placeholder="Password" name="password">
              <input name="role" type="hidden" value="C">
              <input type="submit" value="Create An Account"/>
            </form>
       </div>
</div>
@endsection