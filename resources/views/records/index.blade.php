<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
</head>
<body>
    <nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/bank') }}">Bank</a>
    <a href="{{ url('/records') }}">Records</a>
    </nav>

    <div class="bodyy">
        <h1>Records</h1>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
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
                    <td>{{ $record->deposit_amount }}</td>
                    <td>{{ $record->bank_name }}</td>
                    <td>
                        <a href="{{ route('records.edit', $record->id) }}">Edit</a>
                        <form action="{{ route('records.destroy', $record->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
<style>
    body {
        background: linear-gradient(135deg, #0a1a38, #1e90ff); /* Dark to light blue gradient */
        color: white;
        font-family: Georgia, 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        color: #fefae0;
        text-align: center;
    }

    nav {
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
        backdrop-filter: blur(10px);
        padding: 15px 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        border-radius: 0 0 10px 10px;
        width: 100%;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 0 20px;
        font-size: 16px;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    nav a:hover {
        color: #ffcc00; /* Highlight color on hover */
    }


    table {
        width: 100%;
        max-width: 800px;
        margin: 20px 0;
        border-collapse: collapse;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    table th, table td {
        padding: 12px 20px;
        border: 1px solid #ccc;
        text-align: left;
        background: rgba(255, 255, 255, 0.1); /* Semi-transparent background */
    }

    table th {
        background: rgba(0, 0, 0, 0.6); /* Darker background for header */
        color: #fefae0;
    }

    table tr:nth-child(even) {
        background: rgba(255, 255, 255, 0.05); /* Alternate row color */
    }

    table tr:hover {
        background: rgba(255, 255, 255, 0.2); /* Hover effect */
    }

    a {
        color: skyblue;
        text-decoration: none;
        font-weight: bold;
        margin-right: 10px;
    }

    a:hover {
        text-decoration: underline;
    }

    button {
        background: transparent;
        color: #fefae0;
        border: 2px solid #fefae0;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    button:hover {
        background-color: skyblue;
        color: #0a1a38;
    }

    .alert-success {
        color: #4caf50;
        background: rgba(255, 255, 255, 0.1);
        padding: 10px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
    }
</style>
</html>
