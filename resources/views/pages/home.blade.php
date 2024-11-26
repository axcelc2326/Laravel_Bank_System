<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #1e3c72, #2a5298); color: white;">

    <!-- Header with Fixed Navigation Bar -->
    <header style="position: sticky; top: 0; z-index: 1000; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);">
        <nav class="navbar navbar-expand-lg" style="background: rgba(0, 0, 0, 0.6);">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-2" href="{{ url('/') }}">
                    <span class="brand-highlight">Synex</span> Bank
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/bank') }}">Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/records') }}">Records</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Welcome Section -->
    <div class="container text-center my-5 py-5 rounded" style="background: rgba(0, 0, 0, 0.7);">
        <header class="welcome-section">
            <h1 class="display-4">Welcome to Our Platform</h1>
            <p class="lead">Your trusted partner for seamless banking and financial records management.</p>
        </header>
    </div>

    <!-- Divider Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h3 class="mb-4">
                    A bank is a place where they lend you an umbrella in fair weather and ask for it back when it begins to rain.
                </h3>
                <a href="{{ url('/bank') }}" class="btn btn-light btn-lg text-dark hover-btn">Go to Bank</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/ggg.gif') }}" alt="Logo" class="img-fluid rounded border border-white">
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container text-center my-5">
        <h2 class="mb-5">Why Choose Us?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-white h-100" style="background: linear-gradient(135deg, #2a5298, #1e3c72);">
                    <div class="card-body">
                        <h4 class="card-title">Secure Banking</h4>
                        <p class="card-text">Our platform ensures the highest level of security for all your transactions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white h-100" style="background: linear-gradient(135deg, #2a5298, #1e3c72);">
                    <div class="card-body">
                        <h4 class="card-title">Easy Records Management</h4>
                        <p class="card-text">Access and manage your financial records anytime, anywhere.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white h-100" style="background: linear-gradient(135deg, #2a5298, #1e3c72);">
                    <div class="card-body">
                        <h4 class="card-title">24/7 Support</h4>
                        <p class="card-text">Our dedicated support team is here to assist you round the clock.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4" style="background: rgba(0, 0, 0, 0.8);">
        <p>&copy; 2024 Synex Bank. All Rights Reserved.</p>
        <p>
            Follow us on
            <a href="https://twitter.com" target="_blank" class="text-white text-decoration-none">Twitter</a>,
            <a href="https://facebook.com" target="_blank" class="text-white text-decoration-none">Facebook</a>, and
            <a href="https://instagram.com" target="_blank" class="text-white text-decoration-none">Instagram</a>.
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Navbar and Brand */
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .brand-highlight {
            color: #327af7;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #1100ff;
        }

        /* Buttons */
        .hover-btn {
            transition: background-color 0.3s ease, color 0.3s ease;
            color: white
        }

        .hover-btn:hover {
            background-color: #204ea3;
            color: white;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 12px; /* Width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: rgb(255, 255, 255); /* Track background */
            border-radius: 5px; /* Rounded edges */
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #1e3c72, #2a5298); /* Gradient thumb */
            border-radius: 10px; /* Rounded edges */
            border: 1px solid white;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2a5298, #1e3c72); /* Hover effect */
            border: 2px solid white; /* Highlighted border */
        }
    </style>
</body>
</html>
