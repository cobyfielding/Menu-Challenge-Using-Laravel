@extends('app')




@Section('content')



        @foreach($subcats as $subcat)
            <div class="col-md-4 portfolio-item">
                <img src="{{ $subcat->image }}">
                <span><a href="{{ url('delete', $subcat->id) }}">Delete</a></span>
                <h2>{{ $subcat->title }}</h2>
            </div>





            @endforeach








    @Stop