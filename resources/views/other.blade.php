@extends('layouts.app')
@section('page-title', 'Title Override: Other Page')
@section('content')
<div class="container my-3">
    <div class="row g-4">
        <div class="col">
            <div>
                <h1>{{$moviesArray[0]->title}}</h1>
                <div class="w-50">
                    <img src="{{$moviesArray[0]->cover}}" alt="{{$moviesArray[0]->title}}" @class(['rounded', 'mb-3' => true]) srcset="">
                </div>
                <h3>{{$moviesArray[0]->original_title}}</h3>
                <p><strong>Nationality: </strong>{{ucfirst($moviesArray[0]->nationality)}}</p>
                <span><strong>On screen since: </strong> {{$moviesArray[0]->date}}</span>
                <p><strong>Rated: </strong>{{$moviesArray[0]->vote}}</p>
            </div>
        </div>
    </div>

</div>
@endsection