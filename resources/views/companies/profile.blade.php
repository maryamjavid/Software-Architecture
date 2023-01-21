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
            <input type="submit" value="Save">
        </form>
    </div>
@endsection