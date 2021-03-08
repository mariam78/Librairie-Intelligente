<?php
require_once "./models/LivreManager.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Accueil</title>
</head>
<body>
<nav>
  <ul class="menu">
    <li class="logo"><a href="#">Librairie intelligente</a></li>
    <li class="item"><a href="#">Home</a></li>
    <li class="item"><a href="#">Recherche</a></li>
    <li class="item"><a href="#">Session utilisateur</a></li>
    <li class="item"><a href="#">About</a></li>
    
    <li class="item button"><a href="#">Log In</a></li>
    <li class="item button secondary"><a href="#">Sign Up</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>

<?php 

$LivreManager = new LivreManager();
$LivreManager->chargementLivres();
$livres = $LivreManager->getLivres();
echo $livres[0]->getTitre();


?>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="nav.js"></script>
</body>
</html>