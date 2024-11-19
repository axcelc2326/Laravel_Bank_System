<!DOCTYPE html>
<html>
<head>
    <title>Form Information</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/bank') }}">Bank</a>
        <a href="{{ url('/records') }}">Records</a>
    </nav>

    <div class="center">
        <h1 class="montserrat">ATM</h1>
    </div>
    <div class="container">
        <div class="sub-container">
            <form action="{{ route('records.store') }}" method="POST">
                @csrf
                <h4>Client's Name:</h4>
                <input type="text" name="name" placeholder="Client's Name" required>
                <h4>Deposit Amount:</h4>
                <input type="text" name="deposit" placeholder="Deposit Amount" required>
                <h4>Bank Name:</h4>
                <input type="text" name="bankName" placeholder="Bank Name" required>

                <div class="center">
                    <button type="submit" class="button">Submit</button>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #0a1a38, #1e90ff); /* Dark to light blue gradient */
            background-size: cover;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            color: white;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            backdrop-filter: blur(10px);
            padding: 15px 0;
            border-radius: 0 0 10px 10px;
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

        .center {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 30px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #fefae0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 50px;
        }

        .sub-container {
            background: rgba(255, 255, 255, 0.1); /* Transparent with blur */
            backdrop-filter: blur(10px);
            padding: 20px;
            border: 2px solid #fefae0;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            color: white;
        }

        h4 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            border-color: #1e90ff;
            outline: none;
            box-shadow: 0 0 5px #1e90ff;
        }

        button {
            background: transparent;
            color: #fefae0;
            border: 2px solid #fefae0;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: skyblue;
            color: #0a1a38;
            border-color: skyblue;
        }

        .montserrat {
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #fefae0;
        }

        .alert-success {
            margin-top: 20px;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</body>
</html>
