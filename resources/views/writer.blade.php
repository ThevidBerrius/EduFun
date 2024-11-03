@extends('layouts.app')

@section('title', 'Writers')

@section('content')
    <h1 class="mb-4 text-center">Para Penulis</h1>

    @if ($writers->isEmpty())
        <p class="text-center">Tidak Ditemukan Penulis.</p>
    @else
        <div class="row">
            @foreach ($writers as $writer)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm" onclick="window.location.href='{{ route('writer.courses', $writer->id) }}'" style="cursor: pointer;">
                        @if ($writer->image)
                            <img src="{{ asset($writer->image) }}" alt="{{ $writer->name }}" style="height: 200px; object-fit: contain">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $writer->name }}</h5>
                            <p class="card-text"><em>{{ $writer->bio }}</em></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection

<style>
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }
    .card-text {
        font-size: 1rem;
        color: #555;
    }
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: scale(1.05);
    }
</style>
