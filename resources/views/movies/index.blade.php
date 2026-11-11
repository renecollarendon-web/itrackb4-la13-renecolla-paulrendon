@extends('layouts.app')

@section('title', 'All Movies')

@section('content')

    <!-- PART H: Search and Filter Form (Isang form lang) -->
    <form method="GET" action="{{ route('movies.index') }}" class="mb-4 d-flex gap-2 align-items-center">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search title..." class="form-control w-25">
        
        <select name="genre_id" class="form-select w-25">
            <option value="">All Genres</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" @selected(request('genre_id') == $genre->id)>{{ $genre->name }}</option>
            @endforeach
        </select>

        <select name="is_featured" class="form-select w-25">
            <option value="">Any Status</option>
            <option value="1" @selected(request('is_featured') === '1')>Featured</option>
            <option value="0" @selected(request('is_featured') === '0')>Not Featured</option>
        </select>

        <button type="submit" class="btn btn-primary">Apply</button>
        <a href="{{ route('movies.index') }}" class="btn btn-secondary">Clear</a>
    </form>

    <!-- Button para mag-add ng movie -->
    <div class="mb-3">
        <a href="{{ route('movies.create') }}" class="btn btn-success">Add New Movie</a>
    </div>

    <!-- Movies Table -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Director</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                   <td>{{ $movies->firstItem() + $loop->index }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre->name }}</td>
                    <td>
                        {{ $movie->rating }}
                        @if ($movie->rating >= 8.5)
                            <span class="badge bg-success">Top Rated!</span>
                        @endif
                    </td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>
                        <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this movie?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        No movies found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- PART G: Pagination Links -->
    <div class="mt-4">
        {{ $movies->links() }}
    </div>

@endsection