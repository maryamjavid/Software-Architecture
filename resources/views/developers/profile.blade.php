@extends('layouts.developer')
@section('content')
    <div class="mainProfile">
        <h3 class="title">Edit Profile</h3>
        <form action="" method="post">
            {{ csrf_field() }}
            @php 
               $constant="Illuminate\Support\Facades\Auth"
            @endphp
            @if(session('ChangesSuccessfully'))
               <p class="alert alert-success">
                  Change Successfuly.
               </p>
            @endif
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="{{ $constant::user()->name  }}">
            <label for="linkedin">Linkedin URL</label>
            <input type="text" id='linkedin' name="linkedin" value="{{ $constant::user()->linkedin  }}">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{$constant::user()->phone == '0' ? ''  : $constant::user()->phone }}">
            <label for="degree">Degree</label>
            <select name="degree" id="degree">
                <option value="" ></option>
                <option value="Nothing"  {{ $constant::user()->degree=='' ? 'selected' : '' }}>No degree</option>
                <option value="associate"{{ $constant::user()->degree=='associate' ? 'selected' : '' }}>Associate degree</option>
                <option value="bachelor" {{ $constant::user()->degree=='bachelor' ? 'selected' : '' }}>Bachelor’s degree</option>
                <option value="master"   {{ $constant::user()->degree=='master' ? 'selected' : '' }}>Master’s degree</option>
                <option value="doctor"  {{ $constant::user()->degree=='doctor' ? 'selected' : '' }}>Doctoral degrees</option>
            </select>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value=""></option>
                <option value="student" {{ $constant::user()->status=='student' ? 'selected' : '' }} >Student</option>
                <option value="employed"  {{ $constant::user()->status=='employed' ? 'selected' : '' }}>Employed</option>
                <option value="unemployed"  {{ $constant::user()->status=='unemployed' ? 'selected' : '' }}>Unemployed</option>
            </select>
            <!-- <label for="country">Country</label>
            <select name="country" id="country">
                  <option value=""></option>
                  @include('partials.countriesList')
            </select> -->
            <input type="submit" value="Save">
        </form>
    </div>
@endsection