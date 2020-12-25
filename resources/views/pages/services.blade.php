@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-3">
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">
                    <h5>{{$service}}</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
