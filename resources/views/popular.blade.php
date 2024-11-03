@extends('layouts.app')

@section('title', 'Popular Courses')

@section('content')
    <h1 class="mb-4 text-center">Materi Populer</h1>

    @if ($courses->isEmpty())
        <p class="text-center">Tidak Ditemukan Materi Populer</p>
    @else
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($course->image)
                            <img src="{{ asset($course->image) }}" alt="{{ $course->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $courses->links() }}
        </div>
    @endif
@endsection
