

<?php
if( isset($_POST['nom'])
    && isset($_POST['prenom'])
    && isset($_POST['mail'])
    && isset($_POST['adresse'])
    && isset($_POST['ville'])
    && isset($_POST['code_postal'])
    && isset($_POST['telephone'])
    && isset($_POST['mdp'])){
try {
    // on ouvre une connexion à la base de données
    $connexion = new PDO(
        'mysql:host=localhost;dbname=biblioo;charset=utf8',
        'root', 'root');

} catch (Exception $excp) {
    die('Erreur : ' . $excp->getMessage());

}

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $telephone = $_POST['telephone'];
    $mdp = $_POST['mdp'];

    $qInsertion = "INSERT INTO user (
                                    `nom`,
                                    `prenom`,
                                    `mail`,
                                    `adresse`,
                                    `ville`,
                                    `code_postal`,
                                    `telephone`,
                                    `mdp`
                                    )  VALUES (
                                    :nom,
                                    :prenom,
                                    :mail,
                                    :adresse,
                                    :ville,
                                    :code_postal,
                                    :telephone,
                                    :mdp
                                    )";
    $rq = $connexion->prepare($qInsertion);

    $rq->bindParam(":nom", $nom, PDO::PARAM_STR);
    $rq->bindParam(":prenom", $prenom, PDO::PARAM_STR);
    $rq->bindParam(":mail", $mail, PDO::PARAM_STR);
    $rq->bindParam(":adresse", $adresse, PDO::PARAM_STR);
    $rq->bindParam(":ville", $ville, PDO::PARAM_STR);
    $rq->bindParam(":code_postal", $code_postal, PDO::PARAM_STR);
    $rq->bindParam(":telephone", $telephone, PDO::PARAM_STR);
    $rq->bindParam(":mdp", $mdp, PDO::PARAM_STR);
    $rq->execute();


}

?>
