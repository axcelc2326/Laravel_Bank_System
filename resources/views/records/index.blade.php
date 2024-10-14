<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <style>
        body {
            background-image: url({{ asset('images/bank.jpg') }});
            background-size: cover;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-optical-sizing: auto;
            font-weight: bolder;
            font-style: normal;
            color: white;
        }

        nav {
            background: transparent;
            backdrop-filter: blur(10px);
            color: white;
            height: 20px;
            padding: 10px;
            border-radius: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }

        h1 {
            text-align: center;
            font-size: 24px;
        }

        .container {
            background: transparent;
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            margin: 15px auto;
            width: 80%;
            max-width: 800px;
        }

        .alert {
            background-color: rgba(50, 205, 50, 0.8);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #fefae0;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        td {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/bank') }}">Bank</a>
        <a href="{{ url('/records') }}">Records</a>
    </nav>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <table>
            <h1>Records</h1>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Deposit</th>
                    <th>Bank Name</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->deposit_amount }}</td>
                        <td>{{ $record->bank_name }}</td>
                        <td>{{ $record->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
