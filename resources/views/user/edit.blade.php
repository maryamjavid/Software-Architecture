@extends('layouts.user')
@include('partials.errors')
@include('user.notifications')
<h1>Edit User</h1>
@include('user.form',$user)
