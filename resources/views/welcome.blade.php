@extends('layouts.topic')
@section('content')
<div class="fullscreen bg-white">
<div class="container-fluid">
    <div class="row padding-top-bottom-8">
        <div class="col-2">
        </div>
        <div class="col-10">
            <h1 class="display-4 text-white">Welcome here,</h1>
            <abbr class="text-white">Use Laravel and Bootstrap - <a href="https://github.com/XumingMa/demo" target="blank" class="text-white text-dashed" >GitHub</a>&nbsp;&nbsp;
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-white underline text-dashed">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-white underline text-dashed">Login</a>&nbsp;

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white underline text-dashed">Register</a>
                    @endif
                @endif
        @endif
            </abbr>
        </div>
    </div>
</div>
<div class="container-fluid padding-top-5">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <mark class="display-5 text-white bg-color-main font-weight-bold">INSTALL</mark>
        </div>
    </div>
    <div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
    <pre>
<code class="text">
git clone git@github.com:XumingMa/demo.git

cd ./demo

composer install

cp .env.example .env

#change env database connection information
#you need to create a database in mysql.

#DB_CONNECTION=mysql
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=cigotest
#DB_USERNAME=cigouser
#DB_PASSWORD=cigopass

php artisan key:generate

php artisan migrate

php artisan serve

php artisan test

#Open localhost:8000
</code>
    </pre>
    </div>
    </div>

</div>
</div>
@endsection