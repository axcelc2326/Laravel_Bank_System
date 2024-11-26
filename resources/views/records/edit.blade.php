<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="text-center py-5" style="background: linear-gradient(135deg, #0a1a38, #1e90ff); color: white;">
        <h1 class="display-4 montserrat">Edit Record</h1>
        <p class="lead">Modify the record details below.</p>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <!-- Form Section -->
            <div class="col-lg-6">
                <div class="sub-container p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 10px;">
                    <form action="{{ route('records.update', $record->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-white">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $record->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="deposit" class="form-label text-white">Deposit:</label>
                            <input type="number" id="deposit" name="deposit" class="form-control" value="{{ $record->deposit_amount }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="bankName" class="form-label text-white">Bank Name:</label>
                            <input type="text" id="bankName" name="bankName" class="form-control" value="{{ $record->bank_name }}" required>
                        </div>
                        <button type="submit" class="btn btn-outline-light w-100 mt-3">Update Record</button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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

        input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin: 5px;
        }

        input:focus {
            outline: none;
            border-color: #1e90ff;
            box-shadow: 0 0 5px #1e90ff;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: rgb(255, 255, 255);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            border-radius: 10px;
            border: 1px solid white;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2a5298, #1e3c72);
            border: 2px solid white;
        }
    </style>
</body>
</html>
