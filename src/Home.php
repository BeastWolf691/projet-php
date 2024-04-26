<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->
    <link href="..//src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
    <title>GT Hôtel</title>
</head>

<body>
    <div class="banniere">
        <h1 class="titre">GT Hôtel</h1>
        <ul class="navbar navbar-expand-xl justify-content-end">
            <li class="nav-item">
            <button type="button" class="btn btn-success">
                <a class="nav-link" href="Room-list.php">Réserver</a></button>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Room-list.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Room-list.php">Chambres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Connexion</a>
            </li>
            <li class="nav-item co">
                <a class="nav-link" href="register.html">S'inscrire</a>
            </li>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </ul>
    </div>
    <div class="affiche">
        <img src="..//src/img/5451_ho_00_p_2048x1536.jpg" width="100%" height="100%">
        <p id="présentation">Profitez d'un séjour inoubliable au sein de GT Hôtel. Un moment unique, exceptionnel, un lieu où le temps s'arrête...<br>
        </p>
    </div>

</body>

</html>