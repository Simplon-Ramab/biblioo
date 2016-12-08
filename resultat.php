<center><h2>Le catalogue</h2> <br /></center>
<?php
require_once("bdd.php")
?>
  <div class="container">
    <div class="row">
      <?php
    $reponse = $bdd->query('SELECT * FROM livres');
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
      <div class="col s12 m4 l4">
          <div class="card medium vertical">
            <div class="card-image z-depth-3">
              <img class="responsive-img" src="<?php echo $donnees['couverture']; ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5 class="header"><?php echo $donnees['titre']; ?></h5>
                <!-- <p class="hide-on-small-only"><?php echo $donnees['description']; ?></p> -->
              </div>
              <div class="card-action">
                <a href="article.php" name="resume">Lire le résumé</a>
              </div>
            </div>
          </div>
        </div>
        <?php
      }?>
      </div>
  </div>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
?>
