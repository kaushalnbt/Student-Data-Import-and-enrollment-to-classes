<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/import-students">Import Students</a></li>
            <li><a href="/enroll-students">Enroll Students</a></li>
            <li><a href="/view-student-data">View Student Data</a></li>
        </ul>
    </nav>    
    
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
