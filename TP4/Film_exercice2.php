
        
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
    echo("<h2>Acteurs</h2>");
    echo("questions________1");
    echo("<h4>affichez pour le numéro de l'individu le nombre de films dans lequel il a joué</h4><br>");
    $requette4="SELECT L2_Acteurs.NumInd, COUNT(NumFilm) as nb_Film FROM L2_Acteurs join Individus on L2_Acteurs.NumInd= Individus.NumInd 
    group by NumInd";
    $table_resultat=mysqli_query($connexion,$requette4);
    // affichage chaque Film 
    if($table_resultat){
        echo("<table>");
        echo("<tr><th >NumInd</th><th>nb_Film</th></tr>");
        
        while($ligne=mysqli_fetch_object($table_resultat)){
            echo ("<tr><td>".$ligne->NumInd."</td><td>".$ligne->nb_Film."</td><td> ");
        }
        echo("</table");
    }else{
        echo("Erreur dans la requête");
        echo("message de mysqli").mysqli_error($connexion);
    }


    echo(" questions________2<br>");
    echo("<h4>affichez pour chaque individu le nombre de films dramatiques dans lequel il a joué</h4><br>");

    $requette5="SELECT L2_Acteurs.NumInd, COUNT(L2_Acteurs.NumFilm)As nb_Film,Prenom,Nom FROM `L2_Acteurs` 
    join Individus on L2_Acteurs.NumInd= Individus.NumInd join Films on Individus.NumInd = Films.NumFilm WHERE Genre ='Drame' Group by NumInd ";


    $table_resultat=mysqli_query($connexion,$requette5);
    // affichage chaque Film 
    if($table_resultat){
        echo("<table>");
        echo("<tr><th >NumInd</th><th>nb_Film</th><th >Prenom</th><th>Nom</th></tr>");
        
        while($ligne=mysqli_fetch_object($table_resultat)){
            echo ("<tr><td>".$ligne->NumInd."</td><td>".$ligne->nb_Film."</td><td> ". $ligne->Prenom . "</td><td> " . $ligne->Nom . "</td></tr>");
            
        }
        echo("</table");
    }else{
        echo("Erreur dans la requête");
        echo("message de mysqli").mysqli_error($connexion);
    }