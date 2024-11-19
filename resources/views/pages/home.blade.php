<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/bank') }}">Bank</a>
        <a href="{{ url('/records') }}">Records</a>
    </nav>

    <div class="divider">
        <div class="content">
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
        background: linear-gradient(135deg, #1e3c72, #2a5298); /* Gradient background */
        background-size: cover;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: bold;
        color: white;
        margin: 0;
        padding: 0;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
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

    .divider {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 50px;
        flex-wrap: wrap;
        gap: 20px;
    }

    .content {
        max-width: 600px;
        text-align: center;
    }

    .content h3 {
        font-size: 24px;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .content .toBank {
        display: inline-block;
        color: skyblue;
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        border: 2px solid skyblue;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .content .toBank:hover {
        background-color: skyblue;
        color: #1e3c72;
    }

    .image img {
        width: 500px;
        max-width: 100%;
        border-radius: 20px;
        border: 2px solid white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image img:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }
</style>
</html>
