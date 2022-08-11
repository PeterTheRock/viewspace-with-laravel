@extends('layouts.layout')
<!--below must be defined as a section of content-->
@section('sectionone')<!--Section we want to dump into our layouts.php-->
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ViewSpace </br>
                   <h6>Express Your Thoughts</h6>
                </div>

                <div class="links">
                    