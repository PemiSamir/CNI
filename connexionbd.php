<?php

session_start();

	$serveur="localhost";
	$utilisateur="root";
	$motdepasse="samir781227";
	$basededonnees="cni";

	$con=mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);
	if(!$con)
		{
			die(mysqli_error());
		}


		//include 'funct_connect.php';

?>