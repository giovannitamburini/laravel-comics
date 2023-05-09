@extends('layouts/main_layout')

@section('content')

<main class="container" id="main-two">
    <div id="container-main-two">

        <div>
            <h2>{{$title}}</h2>
            <div><strong>Description: </strong>{{$description}}</div>
            <div><strong>Price: </strong>{{$price}}</div>
        </div>
        <img src="{{$thumb}}" alt="comic">
    </div>

    <a href="/">Homepage</a>

</main>
    
@endsection