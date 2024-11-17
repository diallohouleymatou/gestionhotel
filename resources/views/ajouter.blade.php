<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'ajout de chambre</title>
  
  <!-- Lien vers Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      background-color: #f4f7fc;
      font-family: 'Arial', sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .form-group label {
      font-weight: bold;
    }
    .btn-submit {
      background-color: #5cb85c;
      color: white;
    }
    .btn-submit:hover {
      background-color: #4cae4c;
    }
    h2 {
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <h2>Ajouter une chambre</h2>
          <form action="{{route('ajouter')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="code">Code de la chambre</label>
              <input type="text" class="form-control" id="code" name="code" required placeholder="Entrez le code de la chambre">
            </div>

            <div class="form-group">
              <label for="prix">Prix</label>
              <input type="number" class="form-control" id="prix" name="prix" required placeholder="Entrez le prix de la chambre" step="0.01">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Décrivez la chambre"></textarea>
            </div>

            <div class="form-group">
              <label for="type">Type de chambre</label>
              <select class="form-control" id="type" name="type" required>
                <option value="" disabled selected>Choisissez un type</option>
                <option value="simple">Chambre simple</option>
                <option value="double">Chambre double</option>
                <option value="suite">Suite</option>
              </select>
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-submit btn-lg">Ajouter la chambre</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Lien vers Bootstrap JS et dépendances (jQuery, Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
