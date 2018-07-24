@extends('layouts.app')

@section('sidebar')

    @isset($front_page_work)
        {{ $front_page_work->title_short }}<br>
            <small class="text-muted">
                {{ $front_page_work->materials_used }}, {{ $front_page_work->year }}
            </small>
    @endisset

@endsection

@section('content')

    @isset($front_page_work)
        <img src="{{ asset('storage/'.$front_page_work->cover_image) }}" class="img-fluid">
    @endisset

@endsection
