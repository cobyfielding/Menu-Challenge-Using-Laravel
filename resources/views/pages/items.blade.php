@extends('app')



@section('content')


    @foreach($items as $item)
        @if($item->type=='subCat')
        <a href="{{ $item->id }}"><h2>{{ $item->title }}</h2></a>
        <a href="{{ $item->id }}"><img src="{{ $item->image }}"></a>

            @elseif($item->type=='cat')


        @else()
        <img src="{{ $item->image }}">
        <h2>{{ $item->title }}</h2>


        @endif




    @endforeach









    @stop