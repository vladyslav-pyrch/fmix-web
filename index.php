<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <title>Seminár</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <header class="p-3 mb-4">
      <div class="container">
        <a href="index.php" class="btn btn-secondary">Domov</a>
      </div>
    </header>

    <h1 class="text-center mb-4">Vitajte na našom seminare STU FEI.</h1>

    <div class="d-flex justify-content-center">
      <a href="registration.php" class="btn btn-primary mx-2">Registrácia</a>
      <a href="submition.php" class="btn btn-secondary mx-2">Odovzdanie zadania</a>
    </div>

    <footer class="text-center mt-5">
      <p>&copy; <?= date('Y') ?> Registračný formulár. Všetky práva vyhradené. Made by Vladyslav Pyrch</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>