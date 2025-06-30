<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('coreWeb/assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('coreWeb/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <?php
        // This is a simple PHP script to demonstrate the use of PHP in a web page.
        // You can add your PHP code here to handle form submissions, database connections, etc.
        ?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="" href="/" title="Homepage">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about" title="About page">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/services" title="Services page">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact" title="Contact page">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- End of responsive navbar-->
        <!-- Header-->
         <header class="header-text header-background py-5 p-4 mb-5 p-lg-5 bg-light rounded-3 text-center">
            <h1 class="display-5 fw-bold">welcome!</h1>
            <p class="fs-4">Solutions HUB</p>
            <a class="btn btn-primary btn-lg" href="contact.php">Contact</a>
        </header>
        @yield('content')
                <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('coreWeb/js/scripts.js') }}"></script>
    </body>
</html>