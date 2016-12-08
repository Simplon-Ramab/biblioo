
<?php include('header.php');?>
<div class="container">
        <div class="col m10 offset-m1 s12"  >
            <h2 class="center-align">Inscription</h2>
                <div class="card-panel hoverable" > 
                    <div class="row">
                        <form class="col s12" action="login.php" method="post">
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <input id="nom" name="nom" type="text" class="validate">
                                    <label for="nom">Nom</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="prenom" name="prenom" type="text" class="validate">
                                    <label >Prénom</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <i class="mdi-content-mail prefix"></i>
                                    <input id="mdp" name="mdp" type="password" class="validate" required>
                                    <label >Mot de passe</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="adresse" name="adresse" type="text" class="validate">
                                    <label >Adresse</label>
                                </div>
                            </div >
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <i class="mdi-content-mail prefix"></i>
                                    <input id="mail" name="mail" type="email" class="validate" >
                                    <label >Email</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="telephone" name="telephone" type="text" class="validate" >
                                    <label >Téléphone</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <i class="mdi-content-mail prefix"></i>
                                    <input id="code_postal" type="text"  name="code_postal" class="validate" >
                                    <label >Code postale</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="ville" name="ville" type="text" class="validate">
                                    <label >Ville</label>
                                </div>
                            </div>

                            <button class="btn waves-effect waves-light" type="submit" >Envoyer
    <i class="material-icons right">send</i>
  </button>
                        </form>
                    </div>
                </div>
    </div>
</div>
                 

<?php include('footer.php');?>