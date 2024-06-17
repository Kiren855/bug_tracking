<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include other CSS files if needed -->
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <!-- Add more navigation items as needed -->
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white"
                        href="{{ route('tickets.edit', ['ticket' => 1]) }}">Update Ticket</a>
                    <!-- Thay thế 1 bằng ID thực tế của ticket -->
                </li>
            </ul>
        </div>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place footer content here.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Include other JS files if needed -->
</body>

</html>
