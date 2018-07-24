@extends('layouts.app')

@section('content-title')

    WORKS

@endsection

@section('content')

    <div class="row">
        <div class="col">
            <div class="card-columns">
                @foreach ($works as $work)
                    <div class="card border-light">
                        <a href="{{ route('works.show', $work) }}">
                            <img class="card-img-top rounded-0" src="{{ substr(asset('storage/'.$work->cover_image), 0, -4)."-small".substr(asset('storage/'.$work->cover_image), -4) }}" alt="cover image">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">{{ $work->title_short }}</h6>
                            <small class="card-text text-muted">
                                {{ $work->materials_used }}, {{ $work->year }}
                            </small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection