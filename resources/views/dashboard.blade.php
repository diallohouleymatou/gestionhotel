<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - Hôtel</title>

  <!-- Lien vers Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f7f7f7;
    }
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100%;
      background-color: #343a40;
      color: white;
      padding-top: 20px;
      padding-left: 10px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 15px;
      display: block;
      font-weight: bold;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 260px;
      padding: 20px;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .navbar {
      margin-left: 260px;
      background-color: #343a40;
    }
    .navbar a {
      color: white;
      font-weight: bold;
    }
    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }
    .table th, .table td {
      text-align: center;
    }
    .btn-custom {
      background-color: #28a745;
      color: white;
    }
    .btn-custom:hover {
      background-color: #218838;
    }
    .btn-edit {
      background-color: #007bff;
      color: white;
    }
    .btn-edit:hover {
      background-color: #0056b3;
    }
    .btn-delete {
      background-color: #dc3545;
      color: white;
    }
    .btn-delete:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h3 class="text-center text-white">Admin Hôtel</h3>
    <a href="#dashboard">Dashboard</a>
    <a href="#chambres">Gérer les Chambres</a>
    <a href="#reservations">Réservations</a>
    <a href="#statistiques">Statistiques</a>
    <a href="#utilisateurs">Utilisateurs</a>
    <a href="#profil">Mon Profil</a>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="text-danger">Déconnexion</button>
    </form>
  </div>

  <!-- Content -->
  <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
    </nav>

    <!-- Dashboard Content -->
    <div id="dashboard" class="container-fluid">
      <h2>Bienvenue, Administrateur</h2>
      <div class="row">
        <!-- Statistiques -->
        <div class="col-md-4">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title">Chambres Disponibles</h5>
              <p class="card-text">{{$chambres->count()}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title">Réservations</h5>
              <p class="card-text">5</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title">Utilisateurs</h5>
              <p class="card-text">{{$users->count()}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Gérer les chambres -->
    <div id="chambres" class="container-fluid">
      <h2>Gestion des Chambres</h2>
      <a href="/ajouter"class="btn btn-custom">Ajouter</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Code</th>
            <th>Prix</th>
            <th>Type</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($chambres as $item)
          <tr>
            <td>{{$item->code}}</td>
            <td>{{$item->prix}}</td>
            <td>{{$item->type}}</td>
            <td>{{$disponibilite}}</td>
            <td>
              <a href="{{route('modifier',$item)}}" class="btn btn-edit btn-sm">Modifier</a>
              <a href="{{route('supprimer',$item)}}" class="btn btn-delete btn-sm">Supprimer</a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>

    <!-- Réservations --
