
<?php include('header.php');?>
<div class="container">
        <div class="col m10 offset-m1 s12"  >
            <h2 class="center-align">Ajouter un livre</h2>
                <div class="card-panel hoverable" >
<div class="row ">
    <form class="col s12 " action="add.php" method="post">
      <div class="row">
        <div class="input-field col s6 ">
          <i class="material-icons prefix">label</i>
          <input id="icon_prefix titre" type="text" class="validate" name="titre">
          <label for="icon_prefix">Titre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="auteur" type="tel" class="validate" name="auteur">
          <label for="icon_telephone">Nom de l'auteur</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field s12 m12 l12">
          <i class="material-icons prefix">view_headline</i>
          <input id="description" type="text" name="description" class="validate">
          <label for="icon_prefix">Resumé</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">http</i>
          <input id="couverture" type="text" class="validate" name="couverture">
          <label for="icon_prefix">Coller l'adresse de l'image</label>
        </div>
      </div>

  <button type ="submit" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons ">add</i></button>

    </form>
  </div>
  </div>
</div>
</div>
  

 <?php include('footer.php');?>
