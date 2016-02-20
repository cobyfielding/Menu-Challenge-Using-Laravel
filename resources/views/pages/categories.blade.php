@extends('app')


@section('content')

    @foreach($cats as $cat)

    <div class="col-md-4 portfolio-item">
        <a href="{{ url('/', $cat->id) }}"><img src="{{ $cat->image }}"></a>
        <a href="{{ url('/', $cat->id) }}"><h2>{{ $cat->title }}</h2></a>
    </div>


    @endforeach









    @stop