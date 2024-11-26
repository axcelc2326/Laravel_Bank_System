<!DOCTYPE html>
<html>
<head>
    <title>Form Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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

    <header class="text-center py-5" style="background: linear-gradient(135deg, #0a1a38, #1e90ff); color: white;">
        <h1 class="display-4 montserrat">ATM Information Form</h1>
        <p class="lead">Provide the necessary details to complete your transaction securely.</p>
    </header>

    <main class="container my-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-lg-6">
                <div class="sub-container">
                    <h2 class="mb-4">Client Information</h2>
                    <form action="{{ route('records.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Client's Name:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="deposit" class="form-label">Deposit Amount:</label>
                            <input type="text" id="deposit" name="deposit" class="form-control" placeholder="Enter deposit amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="bankName" class="form-label">Bank Name:</label>
                            <input type="text" id="bankName" name="bankName" class="form-control" placeholder="Enter the bank name" required>
                        </div>
                        <button type="submit" class="btn btn-outline-light w-100 mt-3">Submit</button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                </div>
            </div>

            <!-- Additional Info Section -->
            <div class="col-lg-6">
                <div class="info-box p-4 text-white" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); border-radius: 10px;">
                    <h2>Why Submit This Form?</h2>
                    <ul>
                        <li>Securely record your transactions.</li>
                        <li>Ensure your deposit is tracked efficiently.</li>
                        <li>Get instant confirmation for successful entries.</li>
                    </ul>
                    <h3 class="mt-4">Need Help?</h3>
                    <p>
                        Our support team is available 24/7 to assist you. Reach out via:
                        <ul>
                            <li>Email: support@synexbank.com</li>
                            <li>Phone: +123 456 7890</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </main>

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

    <style>
        .brand-highlight {
            color: #327af7;
            font-weight: bold;
        }

        body {
            background: linear-gradient(135deg, #0a1a38, #1e90ff);
            background-size: cover;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1, h2, h3 {
            color: #ffcc00;
        }

        .navbar-nav .nav-link {
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffcc00;
        }

        .sub-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #fefae0;
        }

        button {
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: skyblue;
            color: #0a1a38;
            border-color: skyblue;
        }

        .info-box ul {
            list-style-type: disc;
            padding-left: 20px;
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
