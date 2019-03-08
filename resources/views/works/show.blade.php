@extends('layouts.app')

@section('content-title')

    {{ $work->title_long }}
    <br>
    <small class="text-muted">{{ $work->materials_used }}, {{ $work->year }}</small>

@endsection

@section('content')

    @if ($work->description)
        <div class="row">
            <div class="col">
                <div class="text-muted p-2">
                    {!! $work->description !!}
                </div>
            </div>
        </div>
    @endif

    @if($work->work_type == "video")

        @if($work->work_video)
            <div class="row py-2">
                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $work->work_video }}" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
                    </div>
                </div>
            </div>
        @endif

    @elseif($work->work_type == "images")
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-row flex-wrap justify-content-between gallery-container">
                    @forelse($pictures ?: [] as $picture)
                        <a href="{{ asset('storage/'.$picture) }}" class="d-flex d-block {{ !$loop->first ? "pt-4" : null }}">
                            <img src="{{ substr(asset('storage/'.$picture), 0, -4)."-small".substr(asset('storage/'.$picture), -4) }}" class="img-fluid">
                        </a>
                    @empty

                        @if($work->cover_image)
                            <a href="{{ asset('storage/'.$work->cover_image) }}">
                                <img src="{{ substr(asset('storage/'.$work->cover_image), 0, -4)."-small".substr(asset('storage/'.$work->cover_image), -4) }}" class="img-fluid pt-4">
                            </a>
                        @endif

                    @endforelse
                </div>
            </div>
        </div>
    @endif



@endsection

@section('js-footer')

    <script type="text/javascript">

        $(document).ready(function () {
            $('.gallery-container').magnificPopup({
                delegate:   'a',
                type:       'image',
                gallery:    {
                    enabled:    true,
                }
            });
        });

    </script>

@endsection