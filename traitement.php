<?php
    include 'connexionbd.php';

    $nom=htmlspecialchars(trim(addslashes($_POST["nom"])));
    $prenom=htmlspecialchars(trim(addslashes($_POST["prenom"])));
    $date=$_POST["date"];
    $lieu=htmlspecialchars(trim(addslashes($_POST["lieu"])));
    $sexe=$_POST["sexe"];
    $taille=htmlspecialchars(trim(addslashes($_POST["taille"])));
    $profession=htmlspecialchars(trim(addslashes($_POST["profession"])));
    $pere=htmlspecialchars(trim(addslashes($_POST["pere"])));
    $mere=htmlspecialchars(trim(addslashes($_POST["mere"])));
    $adresse=htmlspecialchars(trim(addslashes($_POST["adresse"])));
    $tel=htmlspecialchars(trim(addslashes($_POST["tel"])));
    $date_deli=date("Y-m-d");
    $date_exp=date("Y-m-d", strtotime("+10 year"));
    $uniq=date("Ymd");

//on importe la photo
    if ( !empty($_POST["voir"])) 
    {
        $image = addslashes($_FILES['image']['tmp_name']);
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
        $location = "image/" . $_FILES["image"]["name"];

    }
    else
    {
        $location = "image/pro4.jpg";

    }

    $requet="INSERT INTO information (nom, prenom, date_naiss, lieu, sexe, taille, profession, pere, mere, adresse, telephone, photo, date_delivrance, date_exp, numero) values ('$nom','$prenom','$date','$lieu','$sexe','$taille','$profession', '$pere', '$mere', '$adresse', '$tel', '$location','$date_deli','$date_exp','$uniq') ";
    $insertion=mysqli_query($con,$requet) or die("Une erreur est survenue lors de l'enregistrement des informations");

    header("Location:cni.php");
?>