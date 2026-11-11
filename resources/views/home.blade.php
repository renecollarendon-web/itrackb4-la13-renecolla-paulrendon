@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- SECTION 1: INTRO (C2, C3, C4) -->
    <div class="text-center mt-5 mb-5">
        <h1 class="display-4 fw-bold">Discover Your Next Favorite Anime</h1>
        <p class="lead mt-3">
            Welcome to the ultimate collection tracker. Explore ratings, genres, and details of the best anime movies out there.
        </p>
        <a href="{{ route('movies.index') }}" class="btn btn-primary btn-lg mt-4">
            Browse the Movie List
        </a>
    </div>

    <!-- SECTION 2: DATA COUNTS (D1, D2, D3) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-4">
            <div class="card text-center p-3 shadow-sm">
                <h3 class="mb-0">{{ $movieCount }}</h3>
                <p class="text-muted mb-0">Total Movies</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-3 shadow-sm">
                <h3 class="mb-0">{{ $genreCount }}</h3>
                <p class="text-muted mb-0">Total Genres</p>
            </div>
        </div>
    </div>

    <!-- SECTION 3: ABOUT ME (E1, E2, E3) -->
    <div class="text-center mb-5">
        <img src="{{ asset('img/img.jpg') }}" width="120" height="120" class="rounded-circle mb-3 shadow">
        <h4>About the Developer</h4>
        <p class="lead mb-0"><strong>Paul Rendon B. Ranecolla | BSIT | 4th Year | Block 4A</strong></p>
    </div>

@endsection