@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <div class="hero">
        <img src="{{ asset('images/hero.jpg') }}" alt="hero" style="width: 100%; object-fit: cover">
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Materi Terbaru</h2>

        <div class="row">
            @if($dataScienceCourse)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset($dataScienceCourse->image) }}" alt="{{ $dataScienceCourse->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dataScienceCourse->title }}</h5>
                            <p class="card-text"><strong>Penulis:</strong> {{ $dataScienceCourse->writer->name }}</p>
                            <p class="card-text">{{ Str::limit($dataScienceCourse->description, 100) }}</p>
                            <a href="{{ route('courses.show', $dataScienceCourse->id)}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endif

            @if($networkSecurityCourse)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset($networkSecurityCourse->image) }}" alt="{{ $networkSecurityCourse->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $networkSecurityCourse->title }}</h5>
                            <p class="card-text"><strong>Penulis:</strong> {{ $networkSecurityCourse->writer->name }}</p>
                            <p class="card-text">{{ Str::limit($networkSecurityCourse->description, 100) }}</p>
                            <a href="{{ route('courses.show', $networkSecurityCourse->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
