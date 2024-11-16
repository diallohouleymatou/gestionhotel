<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Hôtel</title>
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

        .content-container {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 800px;
        }

        .card-custom {
            background-color: #f8c420;
            color: white;
            border: none;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    <div class="content-container">
        <h2 class="text-center mb-4">Bienvenue, [Nom de l'utilisateur]</h2>

        <!-- Informations de l'utilisateur -->
        <div class="card mb-4 card-custom">
            <h4 class="card-title">Profil utilisateur</h4>
            <p><strong>Nom :</strong> [Nom de l'utilisateur]</p>
            <p><strong>Email :</strong> [Email de l'utilisateur]</p>
            <p><strong>Numéro de téléphone :</strong> [Numéro de téléphone]</p>
            <a href="/modifier-profil" class="btn btn-custom">Modifier le profil</a>
        </div>

        <!-- Liste des réservations -->
        <div class="card mb-4 card-custom">
            <h4 class="card-title">Mes Réservations</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Réservation #1</strong><br>
                    Chambre : Suite Deluxe<br>
                    Date : 12 Janvier 2024 - 15 Janvier 2024<br>
                    <a href="/details-reservation" class="btn btn-custom mt-2">Voir la réservation</a>
                </li>
                <li class="list-group-item">
                    <strong>Réservation #2</strong><br>
                    Chambre : Chambre Standard<br>
                    Date : 20 Février 2024 - 22 Février 2024<br>
                    <a href="/details-reservation" class="btn btn-custom mt-2">Voir la réservation</a>
                </li>
            </ul>
        </div>

        <!-- Options supplémentaires -->
        <div class="d-flex justify-content-between mt-4">
            <a href="/changer-mot-de-passe" class="btn btn-custom w-45">Changer le mot de passe</a>
            <a href="/deconnexion" class="btn btn-custom w-45">Se déconnecter</a>
        </div>
    </div>
</div>

<!-- Lien vers le script JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
