<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ngeview</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <a href="#" class="logo">ngeview</a>
        <form class="search-bar">
            <a href="#">
                <img src="{{ asset('assets/web/search.png') }}" alt="search">
            </a>
            <input type="text" placeholder="Search">
        </form>
        <nav>
            <a href="#">Login</a>
            <a href="#">Sign Up</a>
        </nav>
    </header>

    <main>
        <!-- Kategori Recently View -->
        <section class="category">
            <h2>Recently View</h2>
            <div class="scroll-container"></div>
        </section>
    
        <!-- Kategori On Going -->
        <section class="category">
            <h2>On Going</h2>
            <div class="scroll-container" id="ongoing-category"></div>
        </section>

        <!-- Kategori Complete -->
        <section class="category">
            <h2>Complete</h2>
            <div class="scroll-container" id="complete-category"></div>
        </section>

        <!-- Kategori Movie -->
        <section class="category">
            <h2>Movie</h2>
            <div class="scroll-container" id="movie-category"></div>
        </section>
    </main>
    
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="footer-center">
                <div class="vertical-line"></div>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="#">Get the App</a></li>
                    <li><a href="#">Payment Policy</a></li>
                    <li><p>&copy; 2024 ngeview</p></li>
                </ul>
            </div>  
            <div class="footer-logo">
                <a href="#" class="logo">ngeview</a>                  
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>