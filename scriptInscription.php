<?php
    session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=digitalacademy;charset=utf8','host','');

    if(isset($_POST['Nom']) && ($_POST['Prenom']) && ($_POST['dob']) && ($_POST['Adresse']) && ($_POST['Ville']) && ($_POST['codeForm']) && ($_POST['codeSess']) && ($_POST['typeCours']) && ($_POST['nivEtu'])){
        $Nom_Etu = $_POST['Nom'];
        $Prenom_Etu = $_POST['Prenom'];
        $DOB = $_POST['dob'];
        $Adresse = $_POST['Adresse'];
        $Ville_Etu = $_POST['Ville'];
        $Code_Form = $_POST['codeForm'];
        $Sess = $_POST['codeSess'];
        $Type_Cours = $_POST['typeCours'];
        $Niveau_Etu = $_POST['nivEtu'];

        $Code_Sess = intval($Code_Form.$Sess);
        if ($Code_Sess = 1203) {
            $Code_Sess = 1202;
        } elseif ($Code_Sess = 1204) {
            $Code_Sess = 1201;
        } else {
            $Code_Sess;
        }

        $CIN_Etu = substr($Nom_Etu, 0, 1) . substr($Prenom_Etu, 0, 1) . substr($DOB, 2, 2) . substr($DOB, -2, 2) . substr($Code_Sess, 0, 2).substr($Code_Sess, -1);
        
        $test = $bdd->prepare("SELECT COUNT(*) FROM etudiant WHERE CIN_Etu=?");
        $test->execute([$CIN_Etu]);
        $nb_CIN = $test->fetchColumn();

        if ($nb_CIN > 0){
            $valid = "<script>"."alert('MATRICULE DEJA UTILISE')"."</script>";
            $_SESSION["error"] = "CIN taken / Matricule déjà utilisé";

        } else{
            // Requ�te pr�par�e pour emp�cher les injections SQL
            $requete_etu = $bdd->prepare("INSERT INTO etudiant VALUES(:CIN_Etu, :Nom_Etu, :Prenom_Etu, :DOB, :Adresse_Etu,:Ville_Etu, :Niveau_Etu)");
            $requete_etu->bindValue(':CIN_Etu',$CIN_Etu,PDO::PARAM_STR);
            $requete_etu->bindValue(':Nom_Etu',$Nom_Etu,PDO::PARAM_STR);
            $requete_etu->bindValue(':Prenom_Etu',$Prenom_Etu,PDO::PARAM_STR);
            $requete_etu->bindValue(':DOB',$DOB,PDO::PARAM_STR);
            $requete_etu->bindValue(':Adresse_Etu',$Adresse,PDO::PARAM_STR);
            $requete_etu->bindValue(':Ville_Etu',$Ville_Etu,PDO::PARAM_STR);
            $requete_etu->bindValue(':Niveau_Etu',$Niveau_Etu,PDO::PARAM_STR);
            $requete_etu->execute();
            $requete_inscri = $bdd->prepare("INSERT INTO inscription (Code_Sess, CIN_Etu, Type_Cours) VALUES( :Code_Sess, :CIN_Etu, :Type_Cours)");
            $requete_inscri->bindValue(':Code_Sess',$Code_Sess,PDO::PARAM_STR);
            $requete_inscri->bindValue(':CIN_Etu',$CIN_Etu,PDO::PARAM_STR);
            $requete_inscri->bindValue(':Type_Cours',$Type_Cours,PDO::PARAM_STR);
            $requete_inscri->execute();
            header('Location:index.html');
        }
    } else{
        $_SESSION["error"] = "Please fill all fields / Remplissez tout les champs";
        header('Location:Inscription Form.php');
    }
?>
