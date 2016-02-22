{{--//Tells the browser that this page is an extension of the main APP.BLADE.PHP file--}}
@extends('app')


{{--Designates this content for the 'content' section assigned in the main APP file --}}
@section('content')

    {{-- Takes the variable array and displays the items one at a time via a foreach loop--}}
    @foreach($items as $item)
        {{--A simple if statement in order to display subcategories as links to the corresponding items--}}
        {{--The subcategories are setup in the same way as categories with items linked to them with the CAT_ID--}}
        @if($item->type=='subCat')
            <div class="col-md-4 portfolio-item">
        <a href="{{ $item->id }}"><h2>{{ $item->title }}</h2></a>
        <a href="{{ $item->id }}"><img src="{{ $item->image }}"></a>
                <span><a href="{{ url('delete', $item->id) }}">Delete</a></span>
            </div>
            @elseif($item->type=='cat')

        {{--If there is no SUBCAT then the items are displayed as follows--}}
        @else()
            <div class="col-md-4 portfolio-item">
        <img src="{{ $item->image }}">
                <span><a href="{{ url('delete', $item->id) }}">Delete</a></span>
        <h2>{{ $item->title }}</h2>
            </div>

        @endif




    @endforeach









    @stop