<?php 
    
    $connexion=mysqli_connect('mi-mariadb.univ-tlse2.fr','dahbia.berrani-eps-h','Akbou_2021');
    $genre = $_GET['genre'];
    if (!$connexion) {
        echo("Desolé, connexion au serveur impossible\n");
        exit;
      }
    //selection de la base donnees

    if (!mysqli_select_db($connexion,'19_L1M_dahbia_berrani_eps_haddad')) {
        echo("Désolé, accès à la base  impossible\n");
        exit;
    }
    mysqli_set_charset($connexion, "utf8");
    // Récupération des recettes 
   
    $requette1=("SELECT NumFilm,Titre FROM Films where Genre =\"".$genre."\"");      
    $requette2=("SELECT NumFilm,Titre FROM Films ");

    $table_Film_resultat =  mysqli_query($connexion,$requette1);
    $table_tout_Film_resultat =mysqli_query($connexion,$requette2);
    // affichage chaque recettes

    if  (empty($genre)or ($genre == "*")){
        if($table_tout_Film_resultat){
            echo "<h2>Tous les films</h2>";
            echo "<table>\n";
            while($ligne_Film=mysqli_fetch_object($table_tout_Film_resultat)){
       
        
                echo ("<tr>\n<td>".$ligne_Film->NumFilm."</td>\n<td> ".$ligne_Film->Titre."</td>\n</tr>\n");
            }
            echo "</table>\n";
        }
    }elseif($table_Film_resultat){
        echo "<h2>Les Films du genre</h2>";
        echo "<table>\n";
        while($ligne_Film=mysqli_fetch_object($table_Film_resultat)){
           
            
            echo ("<tr>\n<td>".$ligne_Film->NumFilm."</td>\n<td> ".$ligne_Film->Titre."</td>\n</tr>\n");
        }
        echo "</table>\n";
    }else{
        echo "<p>Erreur dans l'exécution de la requette</p>";
        echo"message de mysqli:".mysqli_error($connexion);
        
        mysqli_close($connexion);
    }
?>