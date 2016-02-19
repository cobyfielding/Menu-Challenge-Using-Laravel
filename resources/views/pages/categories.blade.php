@extends('app')


@section('content')

    @foreach($cats as $cat)


        <a href="{{ url('/', $cat->id) }}"><img src="{{ $cat->image }}"></a>
        <a href="{{ url('/', $cat->id) }}"><h2>{{ $cat->title }}</h2></a>



    @endforeach









    @stop