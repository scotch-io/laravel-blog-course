<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    
    {{-- HEADER --}}
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">My Blog</a>
                </div>


                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">About</a></li>

                        {{-- LOGIN BUTTON HERE --}}
                        <li><a href="/login">Login</a></li> 

                        {{-- TODO: USER PROFILE LINK HERE --}}
                    </ul>
                </div>
            </div> 
        </nav>
    </header>
    
    {{-- JS --}}
    <script src="js/all.js"></script>
</body>
</html>