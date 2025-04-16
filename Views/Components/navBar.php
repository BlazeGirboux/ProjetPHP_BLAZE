
<ul class="flexible space-evenly">
    <!-- grand écran -->
    <?php if (isset($_SESSION["user"])) : ?>
    <li class="menu"><a href="index.php">Home</a></li>
    <li class="menu"><a href="mesEcoles">Mes ventes</a></li>
    <li class="menu"><a href="profil">Profil</a></li>
    <li class="menu"><a href="deconnexion">Déconnexion</a></li>
<?php else : ?>
    <li class="menu"><a href="index.php">Home</a></li>
    <li> <class="menu"><a href="inscription">Inscription</a></li>
    <li class="menu"><a href="connexion">Connexion</a></li>
<?php endif ?>  
  
</ul>
