@extends('layouts.header')
@section('content')
  <div class="LoginContainer container clearfix">
      <div class="companyLogin ">
          <span>Bussiness</span>
          <h3>For <span style='color:#068932'>Companies</span></h3>
          <p>We are the market–leading technical interview platform to identify and hire developers with the right skills.</p>
          <a href="{{route('loginCompany')}}">Login</a>
      </div>
      <div class="developerLogin">
          <h3>For <span style="color:#097BBF">Developers</span></h3>
          <p>Join over 21 million developers, practice coding skills, prepare for interviews, and get hired.</p>
          <a href="{{ route('loginDeveloper') }}">Login</a>
      </div>
  </div>
  @endsection