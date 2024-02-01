@extends('form.layout')
@section('content')

<div class="user-detail">
        <h5 class="d-title">First Name : {{ $userdetails->firstname }}</h5>
        <p class="d-text">Last Name: {{ $userdetails->lastname }}</p>
        <p class="d-text">Address: {{ $userdetails->address}}</p>
        <p class="d-text">email: {{$userdetails->email}}</p>
        <p class="d-text">Gender:{{$userdetails->gender}}</p>
        <p class="d-text">Subject::{{$userdetails->subject}}</p>
        <p class="d-text">Date of Birth::{{$userdetails->dateofbirth}}</p>
  </div>

       
   