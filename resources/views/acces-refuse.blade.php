<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accès refusé</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fee2e2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #dc2626;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>🚫 Accès refusé</h1>

    <p>
        Vous devez avoir plus de 18 ans
        pour accéder au service Advisor.
    </p>

    <a href="/advisor?age=22">
        Retour
    </a>

</div>

</body>
</html>