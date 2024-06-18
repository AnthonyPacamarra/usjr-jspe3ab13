<!DOCTYPE html>
<html>
<head>
    <title>University Management System</title>
    <!-- Add the Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="d-flex justify-content-center mt-3">
        <ul class="nav">
            <li class="nav-item mx-2">
                <a href="{{ url('/show/students/all') }}" class="btn btn-primary">All Students</a>
            </li>
            <li class="nav-item mx-2">
                <a href="{{ url('/show/colleges') }}" class="btn btn-primary">All Colleges</a>
            </li>
            <li class="nav-item mx-2">
                <a href="{{ url('/show/departments') }}" class="btn btn-primary">All Departments</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Add the Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
