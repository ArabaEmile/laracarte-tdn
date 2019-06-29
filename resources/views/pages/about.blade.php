@extends('layouts.default',['title'=>'About'])
@section('content')
    <div clas="container">
        <h2>What is {{config('app.name')}}?</h2>
        <p>{{config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank"> Laramap.com.</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fas fa-exclamation-triangle"></i>This app has been built by @etsmo for learning purposes.</strong>
                </p>
            </div>
        </div>
        <p>Feel free to help to improve the <a href="https://github.com/ArabaEmile/laracarte-tdn"> source code</a>.</p>
        <hr>
        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which {{config('app.name')}} was inspired :).</p>
        <p>More info here  <a href="https://laramap.com/p/about"></a>.</p>
        <hr>
        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.Laravel</p>
        <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatars</li>
        <li>Antony Martin's Geolocation Package</li>
        <li>Michel Fortin's Markdown Parser Package</li>
        <li>Heroku</li>
        </ul>
    </div>
@endsection