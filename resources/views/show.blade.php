<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Advisor</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f6;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2563eb;
        }

        .message {
            background: #eff6ff;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Advisor 👨‍💼</h1>

    <p><strong>Âge :</strong> {{ $age }}</p>

    <p>
        <strong>Intérêt :</strong>
        {{ $interet ?? 'Non renseigné' }}
    </p>

    <div class="message">

        @if ($interet === 'developpement')
            <h2>Conseil 💻</h2>
            <p>
                Vous semblez intéressé par le développement.
                Continuez à apprendre la programmation et développez
                régulièrement des projets pratiques.
            </p>

        @elseif ($interet === 'design')
            <h2>Conseil 🎨</h2>
            <p>
                Le design vous intéresse.
                Développez vos compétences en UI/UX et pratiquez
                régulièrement la création d'interfaces.
            </p>

        @elseif ($interet)
            <h2>Conseil 📚</h2>
            <p>
                Votre intérêt est {{ $interet }}.
                Continuez à développer vos compétences dans ce domaine.
            </p>

        @else
            <h2>Conseil 🌟</h2>
            <p>
                Découvrez différents domaines et trouvez celui
                qui correspond le mieux à vos intérêts.
            </p>
        @endif

    </div>

</div>

</body>
</html>