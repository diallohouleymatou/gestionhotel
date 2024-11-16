<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil de l'Hôtel</title>
    <!-- Lien vers Bootstrap 5 (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style personnalisé pour la page d'accueil */
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-image {
            background-image: url('https://via.placeholder.com/1920x1080'); /* Remplace cette URL par l'image que tu veux */
            background-size: cover;
            background-position: center;
            height: 100%;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Superposition semi-transparente */
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .btn-custom {
            background-color: #f8c420;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #e0b419;
        }
    </style>
</head>
<body>

<div class="bg-image">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="display-4">Bienvenue à notre Hôtel</h1>
        <p class="lead">Un endroit parfait pour vos vacances et séjours d'affaires</p>

        <!-- Liens d'inscription et de connexion -->
        <div class="mt-4">
            <a href="/register" class="btn btn-custom">S'inscrire</a>
            <a href="/login" class="btn btn-custom ms-3">Se connecter</a>
        </div>
    </div>
</div>

<!-- Lien vers le script JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
