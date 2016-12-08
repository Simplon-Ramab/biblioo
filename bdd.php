<?php

 try {
     $bdd = new PDO("mysql:dbname=biblioo;host=localhost","root", "root");
 } catch (PDOException $e) {
     echo 'Connexion échouée : ' . $e->getMessage();
 }
