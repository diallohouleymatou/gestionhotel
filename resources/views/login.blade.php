<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Hôtel</title>
    <!-- Lien vers Bootstrap 5 (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-image {
            background-image: url('https://via.placeholder.com/1920x1080'); /* Remplace par ton image */
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
            background-color: rgba(0, 0, 0, 0.5);
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
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
    <div class="form-container">
        <h2 class="text-center">Connexion</h2>
        <form>
            <!-- Champ Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required name="email">
            </div>

            <!-- Champ Mot de passe -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required name="password">
            </div>

            <!-- Bouton de connexion -->
            <button type="submit" class="btn btn-custom w-100">Se connecter</button>
        </form>
        <div class="mt-3 text-center">
            <p>Pas encore inscrit ? <a href="/register" class="text-decoration-none text-primary">S'inscrire</a></p>
        </div>
    </div>
</div>

<!-- Lien vers le script JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
