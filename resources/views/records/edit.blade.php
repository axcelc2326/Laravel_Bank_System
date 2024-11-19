<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h1>Edit Record</h1>

    <form action="{{ route('records.update', $record->id) }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $record->name }}" required>

        <label for="deposit">Deposit:</label>
        <input type="number" id="deposit" name="deposit" value="{{ $record->deposit_amount }}" required>

        <label for="bankName">Bank Name:</label>
        <input type="text" id="bankName" name="bankName" value="{{ $record->bank_name }}" required>

        <button type="submit">Update Record</button>
    </form>
</body>

<style>
    body {
        background: linear-gradient(135deg, #0a1a38, #1e90ff);
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
        background: transparent;
        backdrop-filter: blur(10px);
        color: white;
        height: 40px;
        padding: 10px;
        width: 100%;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 0 20px;
        font-weight: bold;
    }

    nav a:hover {
        text-decoration: underline;
    }

    form {
        width: 600px;
        background: rgba(255, 255, 255, 0.1);
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    label {
        font-size: 14px;
        margin-bottom: 5px;
        color: #fefae0;
    }

    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        margin: 5px

    }

    input:focus {
        outline: none;
        border-color: #1e90ff;
        box-shadow: 0 0 5px #1e90ff;
    }

    button {
        background: transparent;
        color: #fefae0;
        border: 2px solid #fefae0;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }

    button:hover {
        background-color: skyblue;
        color: #0a1a38;
    }
</style>
</html>
