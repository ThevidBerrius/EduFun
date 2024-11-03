@extends('layouts.app')

@section('title', $course->title)

@section('content')
    <div class="container mt-4">
        @if ($course->category)
            <h2 class="text-uppercase mb-3">{{ $course->category->name }}</h2>
        @endif
        <div class="card shadow-lg">
            @if ($course->image)
                <img src="{{ asset($course->image) }}" alt="{{ $course->title }}"
                    style="height: 400px; object-fit: cover">
            @endif
            <div class="card-body">
                <h1 class="card-title">{{ $course->title }}</h1>

                @if ($course->writer)
                    <p class="text-muted">By <strong>{{ $course->writer->name }}</strong></p>
                @endif
                <p>Dipublikasi tanggal {{ $course->created_at->format('j F Y') }}</p>
                <div class="course-description mt-4">
                    <p class="card-text">{{ $course->description }}</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .course-description {
            font-size: 1.1em;
            line-height: 1.6;
        }

        .card-body h1 {
            font-size: 2em;
            color: #333;
        }

        .text-muted {
            font-size: 0.9em;
            color: #6c757d;
        }
    </style>
@endsection
