<?php

    if( isset($_POST["submit"])){

        $content_dir = 'upload/'; // dossier où sera déplacé le fichier
        $tmp_file = $_FILES['photo']['tmp_name'];;
        
        if( !is_uploaded_file($tmp_file)){
            exit("Le fichier est introuvable");
        }

        // on vérifie maintenant l'extension
        $type_file = $_FILES['photo']['type'];

        if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'gif') ){
            exit("Cette extension n'est pas acceptée");
        }

        // on copie le fichier dans le dossier de destination
        $name_file = $_FILES['photo']['name'];
        $alea = rand(1, 1000000000);
        $myFile = $content_dir . $alea ."_" . $name_file;

        if( !move_uploaded_file($tmp_file, $myFile) ){
            exit("Impossible de copier le fichier dans $content_dir");
        }

        echo "Fichier envoyé avec succès";
    }

        header("Location:index.php?myFile=".$myFile);


?>