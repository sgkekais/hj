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
                <div class="text-muted bg-light pt-2 px-2 border-top border-bottom">
                    {!! $work->description !!}
                </div>
            </div>
        </div>
    @endif

    <div class="row pt-2">
        <div class="col">
            <div class="d-flex flex-row flex-wrap justify-content-between gallery-container">
                @forelse($pictures ?: [] as $picture)

                    <a href="{{ asset('storage/'.$picture) }}" class="d-flex d-block pt-4">
                        <img src="{{ substr(asset('storage/'.$picture), 0, -4)."-small".substr(asset('storage/'.$picture), -4) }}" class="img-fluid">
                    </a>
                    <!-- style="max-height: 400px; width: auto" -->
                @empty

                    <a href="{{ asset('storage/'.$work->cover_image) }}">
                        <img src="{{ substr(asset('storage/'.$work->cover_image), 0, -4)."-small".substr(asset('storage/'.$work->cover_image), -4) }}" class="img-fluid pt-4">
                    </a>

                @endforelse
            </div>
        </div>
    </div>

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