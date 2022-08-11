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
                    <!--
                        <p>{{ $internet}} <br> {{$type}}<br>{{$base}}</p>
                    These variables above are not being used if not omitted can cause problems for laravel
                    -->
                   
                   
                        <!--@for($i =0; $i < 5; $i++)
                   <p>The value of i is {{$i}}</p>
                   @endfor-->
                   <!--Creation of a forloop is VERY IMPORTANT-->

                   <!-- @for($i = 0;$i < count($internet); $i++)
                   <p>{{$viewspaces[$i]['type']}}</p>
                   @endfor -->
                
                   @foreach($internet as $newInternet)
                   <div>{{$loop->index}} {{$newInternet['type']}} - {{$newInternet['base']}}
                    

                    @if($loop->first)
                    <span>- First in the loop</span>
                    @endif
                   </div>
                   @endforeach
                   <div>
                    @for($welcomesentence)
                    {{$welcomesentence['object']}}
                   </div>
                 @endfor
                </div> The code in the loop is not working for some reason, going to keep moving on
                
            </div>
            <!--allows us to yield a specified '@Section' all content from a section is kept here after Laravel processing-->@yield('sectionone')
        </div>
        @endsection
    
