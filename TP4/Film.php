<!DOCTYPE html >
<html>
    <head>
        <title>Films</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h2>Films</h2>
        
            <?php             
            //connexion à la base de donnees 
           include 'connexion_base.php';
             //connexion à la base de donnees 
             
             $connexion= my_connect();
             
             // selection de la base donnees 
             if (!mysqli_select_db($connexion,'19_L1M_dahbia_berrani_eps_haddad')){
                 echo("désole, accès à la base impossible\n");
                 exit;
             } 
            
             echo("<h2>affichage de tout les film</h2>");
            // recupération des donnees
            $requette1 = "SELECT Films.NumFilm, Individus.Nom, Individus.Prenom, Films.Titre FROM Films JOIN Individus ON Films.NumInd = Individus.NumInd";
            $table_resultat = mysqli_query($connexion,$requette1);
            // affichage chaque films 
            if($table_resultat){
                echo ("<ul>");
                while($ligne = mysqli_fetch_object($table_resultat))
                {        
                    echo("<li>Film".$ligne->NumFilm. "  ".$ligne->Titre. "  réalisateurs:".$ligne->Nom." ".$ligne->Prenom."</li>");          
                }
                echo ("</ul>");
                }else {
                    echo("<p>Erreur dans l'exécution de la requête. </p>");
                    echo("message de mysqli").mysqli_error($connexion);
                }    

           
            echo (" question____3(tableau)");
            $table_resultat =  mysqli_query($connexion,$requette1);
            if($table_resultat){
                echo("<table>");
                echo ("<tr><th colspan='2'>Film</th><th colspan='2'>Réalisateur</th></tr>");
                echo ("<tr><th>Numéro Film</th><th>Titre</th><th>Nom</th><th>Prénom</th></tr>");
                while ($ligne = mysqli_fetch_object($table_resultat)) {
                    echo ("<tr><td>".$ligne->NumFilm."</td><td>".$ligne->Titre."</td><td> ". $ligne->Nom . "</td><td> " . $ligne->Prenom . "</td></tr>");
                
            }
                echo "</table>";
            }else {
                echo("<p>Erreur dans l'exécution de la requête. </p><br/>");
                echo("<p>Message de mySQL: </p>").mysqli_error($connexion);
            }



            echo("questions________4<br>");
            echo("<h2>Films du genre Drame</h2><br>");
            $requette2="SELECT Films.NumFilm, Individus.Nom,  Films.Titre FROM Films JOIN Individus ON Films.NumInd = Individus.NumInd  Where Genre = 'Drame' ";
            $table_resultat=mysqli_query($connexion,$requette2);
            // affichage chaque Film 
            if($table_resultat){
                echo("<table>");
                echo("<tr><th colspan='2'>Film Drame</th><th>Realisateur</th></tr>");
                echo("<tr><th >Numéro Film</th><th >Titre</th><th>Nom</th></tr>");
                while($ligne=mysqli_fetch_object($table_resultat)){
                    echo ("<tr><td>".$ligne->NumFilm."</td><td>".$ligne->Titre."</td><td> ". $ligne->Nom . "</td></tr>");
                }
                echo("</table");
            }else{
                echo("Erreur dans la requête");
                echo("message de mysqli").mysqli_error($connexion);
            }

            $requette3="SELECT Genre,count(Films.NumFilm) AS nb  FROM Films Group by Genre";
            $table_resultat=mysqli_query($connexion,$requette3);
            // affichage chaque Film 

            echo("<br> question_____5:");
            if($table_resultat){
                echo("<table>");
                echo("<tr><th colspan='1'>Genre</th><th colspan='1'>nombre Film</th></tr>");
                
                while($ligne=mysqli_fetch_object($table_resultat)){
                    echo ("<tr><td>".$ligne->Genre."</td><td>".$ligne->nb."</td><td> ");
                }
                echo("</table");
            }else{
                echo("<b>Erreur dans l'exécution de la requête. </b>");
                echo("<b>Message de mySQL: </b>").mysqli_error($connexion);
            }

            ?>
    </body>