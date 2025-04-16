<!-- corps de la page d'accueil qui prendar place dans le main de base.php -->

<!-- !!! corriger le chemin de images ! -->


        
<div class="flexible wrap space-around">

    <?php foreach($planes as $plane) : ?>
    <div class="border card">
        <div class="Bestcard">

        </div>
       
        <div>
            <div class="flexible blocImageEcole"><img src="<?= $plane->venteImage ?>" alt="itn" /></div>
            <div class="center">
            <h2 class="center"><?= $plane->venteTitre ?></h2>
                 <!--<p><span><br><?= $plane->venteDescription ?></span><br> - <span><?= $plane->venteLocation?><br>-<?= $plane->ventePrix ?> €</span></p>-->
               <!-- <h3><?= $userID->userID?></h3> -->
                <a href="voirEcole.php" class="btn btn-page">More information</a>
            </div>
        </div>
    </div>                                                   
    <?php endforeach ?>
</div>