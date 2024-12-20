<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container d-flex justify-content-center">
        <a href="/" class="text-decoration-none">
            <span class="mb-0 h1 text-dark"><i class="bi bi-check-all"></i>To-do list</span>
        </a>
        @if(session()->has('success'))
            <div id="success-message" class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('success-message').style.display = 'none';
                }, 3000);
            </script>
        @endif
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

@include('footer')

</body>
</html>
