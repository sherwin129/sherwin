<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Transaction Processing System</title>
    <style>
        /* Basic CSS for simple clean UI */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f8;
            color: #333;
        }
        header {
            background: #2d3748;
            color: white;
            padding: 1rem 2rem;
        }
        nav a {
            color: white;
            margin-right: 1.5rem;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 6px;
        }
        h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            color: #2d3748;
        }
        form label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
        }
        form input[type="text"],
        form select {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.25rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form button {
            margin-top: 1.5rem;
            background: #2d3748;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        form button:hover {
            background: #4a5568;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #edf2f7;
        }
        .success-message {
            background: #c6f6d5;
            color: #276749;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
        }
        .error-message {
            background: #fed7d7;
            color: #c53030;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('students.index') }}">Students</a>
            <a href="{{ route('sections.index') }}">Sections</a>
        </nav>
    </header>
    <main>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                <ul style="margin:0; padding-left: 1.25rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
