@extends('frontend.index')

@section('content1')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Livewire</title>
 
       
      
    </head>
    <body >
       
            @if (Route::has('login'))
            <div >
            <ul class="main-menu primary-menu">
						<li> @auth
                        <a  href="{{ url('/home') }}" class=" text-white ">Home</a>
                             @else
                        </li>
						<li>   <a href="{{ route('login') }}" class=" text-white ">Login</a>
                        
                        </li>

						<li>  @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" text-white ">Register</a>
                              @endif
                        </li>
						
					</ul>
                    @endauth
                </div>
            @endif
        </div>

    </body>
</html>
@endsection