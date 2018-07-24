@extends('layouts.app')

@section('sidebar')

    {{ $front_page_work->title_short }}<br>
    <small class="text-muted">
        {{ $front_page_work->materials_used }}, {{ $front_page_work->year }}
    </small>

@endsection

@section('content')

    <img src="{{ asset('storage/'.$front_page_work->cover_image) }}" class="img-fluid">

@endsection
