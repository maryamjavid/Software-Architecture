@extends('layouts.user')
@include('user.notifications')
    @if(\Illuminate\Support\Facades\Auth::check())
     <p ><a href='{{ route("user.logout") }}'>Log out</a></p>
     <p>
        Welcome {{ \Illuminate\Support\Facades\Auth::user()->name }}
     </p>
    @endif
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Operations</th>
            </tr>
        </thead>
    @foreach($users as $user)
          @include('user.item')
    @endforeach
    </table>
