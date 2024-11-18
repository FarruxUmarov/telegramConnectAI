<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Questions</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1b1b32;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .form-container {
            background: #2a2a40;
            border-radius: 10px;
            padding: 20px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .form-container h1 {
            margin: 0 0 20px;
            text-align: center;
            font-size: 24px;
        }

        textarea {
            width: 100%;
            height: 150px;
            border: none;
            outline: none;
            resize: none;
            background: transparent;
            color: #fff;
            font-size: 18px;
            border-bottom: 2px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        textarea:focus {
            border-bottom-color: #4facfe;
        }

        textarea::placeholder {
            color: #aaa;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: #fff;
            background: linear-gradient(90deg, #4facfe, #00f2fe);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: linear-gradient(90deg, #00f2fe, #4facfe);
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>Enter Your Questions</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <textarea name="questions" placeholder="Write your questions here..."></textarea>
        <button type="submit">Submit</button>
    </form>
    <h2>All Questions</h2>
    @if (!isset($questions))
        <p>Hozirda savollar mavjud emas.</p>
    @else
        <ul>
            @foreach ($questions as $question)
                <li>{{ $question->questions }}</li>
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>
