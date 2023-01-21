@extends('layouts.header')
@section('content')
  <div class="LoginContainer container clearfix">
      <div class="companyLogin ">
          <!-- <span>Bussiness</span> -->
          <h3 style='margin-top:107px;'> <span style='color:#068932'>Hire</span> Hire with HackerRank</h3>
          <p>We are the market–leading technical interview platform to identify and hire developers with the right skills.</p>
          <a href="{{ route('registerCompany') }}">Sign Up</a>
      </div>
      <div class="developerLogin">
          <h3><span style="color:#097BBF">Practice </span>with HackerRank</h3>
          <p>Join over 21 million developers, practice coding skills, prepare for interviews, and get hired.</p>
          <a href="{{ route('registerDeveloper') }}" style="background:white;color:black">Sign Up</a>
      </div>
  </div>
@endsection