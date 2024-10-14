<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel = "stylesheet" href= '{{asset('css/bootsrap.css')}}';> --}}
    <title>Home Page</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/bank') }}">Bank</a>
        <a href="{{ url('/records') }}">Records</a>
    </nav>

    <div class="divider">
        <div>
            <h3>A bank is a place where they lend you an umbrella in fair weather and ask for it back when it begins to rain.</h3>
            <h2><a href="{{ url('/bank') }}" class="toBank">Go to Bank</a></h2>
        </div>
        <div class="image">
            <img src="{{ asset('images/ggg.gif') }}" alt="Logo" />
        </div>
    </div>


</body>

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
    img{
        width: 500px;
        border-radius: 20px;
        border: 2px solid white;
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
    .toBank {
        color: skyblue;
        text-decoration: none;
    }
    .divider{
        display: flex;
        align-items: center;
        flex-direction: row;
        padding-top: 50px;
    }
</style>
</html>
