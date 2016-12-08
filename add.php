<?php
if( isset($_POST['titre'])
    && isset($_POST['auteur'])
    && isset($_POST['description'])
    && isset($_POST['couverture'])){
try {
    // on ouvre une connexion à la base de données
    $connexion = new PDO(
        'mysql:host=localhost;dbname=biblioo;charset=utf8',
        'root', 'root');

} catch (Exception $excp) {
    die('Erreur : ' . $excp->getMessage());

}
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $description = $_POST['description'];
    $couverture = $_POST['couverture'];

    $qInsertion = "INSERT INTO livres (
                                    `titre`,
                                    `auteur`,
                                    `description`,
                                    `couverture`

                                    )  VALUES (
                                    :titre,
                                    :auteur,
                                    :description,
                                    :couverture

                                    )";
    $rq = $connexion->prepare($qInsertion);

    $rq->bindParam(":titre", $titre, PDO::PARAM_STR);
    $rq->bindParam(":auteur", $auteur, PDO::PARAM_STR);
    $rq->bindParam(":description", $description, PDO::PARAM_STR);
    $rq->bindParam(":couverture", $couverture, PDO::PARAM_STR);

    $rq->execute();

header ('location: catalogue.php');
}

?>
