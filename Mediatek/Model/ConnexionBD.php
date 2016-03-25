<?php
//ConnexionBD.php
//Permet d'initialiser une connexion PDO avec la base de données grâce à une variable $bdd
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=LP05;charset=UTF8','LP05','iut05');
		}catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
?>
