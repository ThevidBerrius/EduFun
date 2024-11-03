@extends('layouts.app')

@section('title', $writer->name . "'s Courses")

@section('content')
    <h1>Courses by {{ $writer->name }}</h1>
    <p>{{ $writer->bio }}</p>

    @if ($writer->courses->isEmpty())
        <p>Tidak ada materi yang ditulis oleh penulis ini.</p>
    @else
        <div class="row">
            @foreach ($writer->courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($course->image)
                            <img src="{{ asset($course->image) }}" alt="{{ $course->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
