<?php
    session_start();
    $con=mysqli_connect('sql102.epizy.com','epiz_27582067','projet.15');
    mysqli_select_db($con,'epiz_27582067_clients');
    $username=$_POST['Username'];
    $pwd=$_POST['Password'];
    $requette_selection="select * from clients where Username='$username' && Password='$pwd'" ;
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if ($NOL==1){
        while($row = mysqli_fetch_array($resultat)){
            $Fullname=$row["Nom"]." ".$row["Prenom"];
            echo   $Fullname;
        }
        $_SESSION['name']=$Fullname;
        header('location:Acceuil.php');
        
    }
    else{
        echo "Vous n'etes pas inscrits :|";
    }
?>
