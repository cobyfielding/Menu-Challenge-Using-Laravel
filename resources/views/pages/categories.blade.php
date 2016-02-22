{{--//Tells the browser that this page is an extension of the main APP.BLADE.PHP file--}}
@extends('app')

{{--Designates this content for the 'content' section assigned in the main APP file --}}
@section('content')

    {{-- Takes the variable array and displays the items one at a time via a foreach loop--}}
    @foreach($cats as $cat)

    <div class="col-md-4 portfolio-item">
        {{--Takes the ID from the variable and uses it for the href link also uses title and image for display info--}}
        <a href="{{ url('/', $cat->id) }}"><img src="{{ $cat->image }}"></a>
        <span><a href="{{ url('delete', $cat->id) }}">Delete</a></span>
        <a href="{{ url('/', $cat->id) }}"><h2>{{ $cat->title }}</h2></a>
    </div>


    @endforeach









    @stop