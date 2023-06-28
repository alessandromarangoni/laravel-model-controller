@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Most Viewed</h1>
    <div class="row g-4">
        <div class="col">
            <div class="d-flex justify-content-between  flex-wrap">
                @foreach ($movies as $item)
                    <a href="{{url('otherpage/'.$item['id'].'/')}}" class="">
                        <div class="card my-3 mx-1">
                            <div class="card-header">
                                <h2>{{$item -> title}}</h2>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item"> <img src="{{$item->cover}}" alt="{{$item -> title}}" class="rounded"> </li>
                                    <li class="list-group-item"><span><strong>Vote: </strong></span>:  {{$item->vote}}</li>
                                </ul>
                            </div>
                        </div></a>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection