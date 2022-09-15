<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Css -->
    <?=$css?>
    <!-- javascript -->
    <?=$js?>
    <!-- title -->
    <title><?=$title?></title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog Dev</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=$contextPath?>/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$contextPath?>/articles">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$contextPath?>/register">Inscription</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="<?=$contextPath?>/login">Connexion</a>
        </li>          
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder=".ex Python" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
</header>
<main>
    <?=$content ?>
</main>
<footer></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Javascript -->
</body>
</html>