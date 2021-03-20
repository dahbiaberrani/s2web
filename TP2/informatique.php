<!DOCTYPE html >
<html>
    <head>
        <title>Ceci est une page de test</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        <?php 
        	$semaine = array(
            	"Lundi" => "Non",
            	"Mardi" => "Oui",
            	"Mercredi" => "Non",
            	"Jeudi" => "Oui",
            	"Vendredi" => "Oui"
        	) ;
        	foreach($semaine as $jours => $cours)    {
            	echo $jours. " 		cours informatique :   " .  $cours . "<br>";
				  
        	}
        ?>
    </body>
</html>