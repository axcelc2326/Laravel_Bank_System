<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Main Content -->
    <div class="container py-5">
        <h1>Transaction Records</h1>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Deposit</th>
                        <th>Bank Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>${{ number_format($record->deposit_amount, 2) }}</td>
                            <td>{{ $record->bank_name }}</td>
                            <td>
                                <a href="{{ route('records.edit', $record->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('records.destroy', $record->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #0a1a38, #1e90ff);
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .brand-highlight {
            color: #327af7;
            font-weight: bold;
        }

        header nav a {
            color: white;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #ffcc00;
        }

        h1 {
            color: #fefae0;
            text-align: center;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            color: white; /* Ensures text color is white */
        }

        thead th {
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent black */
            color: #fefae0;
        }

        tbody tr {
            background: rgba(255, 255, 255, 0.1); /* Semi-transparent white */
        }

        tbody tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.15); /* Slightly darker for alternate rows */
        }

        tbody tr:hover {
            background: rgba(255, 255, 255, 0.25); /* Highlight effect on hover */
        }

        tbody td {
            color: white; /* Ensures cell text is white */
        }

        footer {
            margin-top: auto;
            background: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
        }

        footer a {
            color: skyblue;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .alert-success {
            color: #4caf50;
            background-color: rgba(0, 128, 0, 0.2);
            padding: 10px;
            border: 1px solid #4caf50;
            border-radius: 5px;
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
