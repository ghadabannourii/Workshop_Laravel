<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion des Cours')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        nav {
            background: #2c3e50;
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            font-size: 24px;
            font-weight: 600;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background: #3498db;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #2980b9;
        }

        .content {
            padding: 30px;
        }

        .alert {
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: 500;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background: #2980b9;
        }

        .btn-success {
            background: #27ae60;
            color: white;
        }

        .btn-success:hover {
            background: #229954;
        }

        .btn-warning {
            background: #f39c12;
            color: white;
        }

        .btn-warning:hover {
            background: #e67e22;
        }

        .btn-danger {
            background: #e74c3c;
            color: white;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .btn-secondary {
            background: #95a5a6;
            color: white;
        }

        .btn-secondary:hover {
            background: #7f8c8d;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ecf0f1;
        }

        table th {
            background: #34495e;
            color: white;
            font-weight: 600;
        }

        table tr:hover {
            background: #f8f9fa;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #2c3e50;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-group .error {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }

        .card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .card p {
            color: #7f8c8d;
            line-height: 1.6;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .actions form {
            display: inline;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        h2 {
            color: #34495e;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
            }

            nav {
                flex-direction: column;
                gap: 10px;
            }

            table {
                font-size: 12px;
            }

            table th,
            table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <h1>📚 Gestion des Cours</h1>
            <a href="{{ route('courses.index') }}">Liste des cours</a>
        </nav>

        <div class="content">
            {{-- Messages flash --}}
            @if(session('success'))
                <div class="alert alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    ✗ {{ session('error') }}
                </div>
            @endif

            {{-- Contenu de la page --}}
            @yield('content')
        </div>
    </div>
</body>
</html>
