@extends('layouts.app')

@section('content-title')

    {{ $staticPage->title_long }}

@endsection

@section('content')

    <p class="">
        {!! $staticPage->body  !!}
    </p>

@endsection