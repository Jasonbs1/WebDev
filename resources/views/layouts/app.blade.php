<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles') <!-- Section for adding page-specific styles -->
</head>
<body>

    <div class="container-fluid">
        <!-- Header Section -->
        <header class="d-flex justify-content-between py-3">
            <div>
                <h1>Library Management System</h1>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{ route('admin.index') }}" class="btn btn-primary">Admin Dashboard</a>
                <a href="{{ route('librarian.index') }}" class="btn btn-secondary ml-2">Librarian Dashboard</a>
                <a href="{{ route('reminders.index') }}" class="btn btn-info ml-2">Reminders</a>
            </div>
        </header>

        <!-- Main Content Section -->
        <div class="row">
            <div class="col-3">
                <!-- Sidebar -->
                <nav class="list-group">
                    <a href="{{ route('admin.index') }}" class="list-group-item">Admin Dashboard</a>
                    <a href="{{ route('librarian.index') }}" class="list-group-item">Librarian Management</a>
                    <a href="{{ route('reservations.index') }}" class="list-group-item">Reservations</a>
                    <a href="{{ route('collections.index') }}" class="list-group-item">Library Collection</a>
                    <a href="{{ route('access_requests.index') }}" class="list-group-item">Access Requests</a>
                </nav>
            </div>
            <div class="col-9">
                <!-- Page Specific Content -->
                @yield('content') <!-- Where the page content will be injected -->
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 University Library</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- Section for adding page-specific scripts -->
</body>
</html>
