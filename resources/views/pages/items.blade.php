@extends('app')



@section('content')


    @foreach($items as $item)
        @if($item->type=='subCat')
            <div class="col-md-4 portfolio-item">
        <a href="{{ $item->id }}"><h2>{{ $item->title }}</h2></a>
        <a href="{{ $item->id }}"><img src="{{ $item->image }}"></a>
            </div>
            @elseif($item->type=='cat')


        @else()
            <div class="col-md-4 portfolio-item">
        <img src="{{ $item->image }}">
        <h2>{{ $item->title }}</h2>
            </div>

        @endif




    @endforeach









    @stop