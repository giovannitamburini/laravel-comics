@extends('layouts/main_layout')

@section('content')

<main>

    <div class="container" id="container-comics">

        <div id="current">current series</div>

        <div class="row">

            @foreach ($comics as $item)
            
            <div class="col-2 single-card">

                <div class="container-img">
                    <img src="{{$item['thumb']}}" alt="comic">
                </div>
                
                {{$item['title']}}
                    
            </div>
                
            @endforeach
        </div>

        <button id="load">LOAD MORE</button>
        
    </div>
</main>
    
@endsection