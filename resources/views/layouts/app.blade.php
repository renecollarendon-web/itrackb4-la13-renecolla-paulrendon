<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Movie Collection')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .nav-link.active {
        font-weight: bold;
        color: #0d6efd;
        border-bottom: 2px solid #0d6efd;
    }
</style>
</head>
        <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<body>
    <header>
        
        @include('partials._nav')
    </header>

    <main class="container mt-4">
        {{-- ✅ FLASH MESSAGE DISPLAY --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>