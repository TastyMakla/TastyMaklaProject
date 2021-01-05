<?php
    session_start();
    $con=mysqli_connect('sql102.epizy.com','epiz_27582067','projet.15');
    mysqli_select_db($con,'epiz_27582067_clients');
    $name=$_POST['Nom'];
    $pname=$_POST['Prenom'];
    $username=$_POST['User'];
    $email=$_POST['mail'];
    $pwd=$_POST['MotDePasse'];
    $country=$_POST['Pays'];
    $city=$_POST['Ville'];
    $requette_selection="select * from clients where Username='$username'";
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if ($NOL==1){
        echo "Ce nom d'utilisateur est deja utilise";
    }
    else{
        $requette_insertion="INSERT INTO `clients`(`Nom`,`Prenom`,`Username`,`Email`,`Password`,`Pays`,`Ville`,`Sexe`) VALUES ('$name','$pname','$username','$email','$pwd','$country','$city','Masculin') ";
        mysqli_query($con,$requette_insertion);
        header('location:Home.php');
    }
?>