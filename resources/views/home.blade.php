<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super Blog</title>

    {{-- css --}}
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-default">
        <div class="container">
            <a href="#" class="navbar-brand">Super Blog</a>
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="/profile">User</a></li>
            </ul>
        </div>
        </nav> 
    </header>

    <footer>
        <div class="container text-center">
            Copyright &copy; {{ date('Y') }} Super Blog
        </div>
    </footer>
    
</body>
</html>