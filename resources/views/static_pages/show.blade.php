@extends('layouts.app')

@section('content-title')

    {{ $staticPage->title_long }}

@endsection

@section('content')

    @if( $staticPage->title_short == "About")
        <div class="col-6 ml-0 pl-0">
            {!! $staticPage->body !!}
        </div>
    @else
        <p class="">
            {!! $staticPage->body !!}
        </p>
    @endif

@endsection