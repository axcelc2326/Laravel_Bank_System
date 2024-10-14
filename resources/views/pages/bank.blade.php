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
                    <h4>Client's Name: </h4>
                    <input type="text" name="name" placeholder="Client's Name" required>
                    <h4>Deposit Amount: </h4>
                    <input type="text" name="deposit" placeholder="Deposit Amount" required>
                    <h4>Bank Name: </h4>
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
        </div>





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

        .center{
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        #summary {
            margin-top: 30px;
        }

        button {
            background: transparent;
            color: #fefae0;
            border: 2px solid #fefae0;
            padding: 15px;
            margin: 20px;
            width: 300px;
            border-radius: 10px;
        }

        .button:hover {
            background-color: skyblue;
        }

        .montserrat {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-optical-sizing: auto;
            font-weight: bolder;
            font-style: normal;
            color: #fefae0;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .sub-container{
            background: transparent;
            backdrop-filter: blur(10px);
            padding: 10px 10px;
            border: 2px solid #fefae0;
            border-radius: 10px;
            width: 500px;
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
    </style>

</body>
</html>
