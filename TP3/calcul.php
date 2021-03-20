<!DOCTYPE html >
<html>
    <head>
        <title>calcul</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h2></h2>
        <table>
       
        <?php 
        $nomArticle = array(
            "manteau" => 150,
            "robe soirée" => 120,
            "Lunette soleil" => 155,
            "Imprimente" => 100,
            "ordianateur" => 500
        )  ;
        foreach($nomArticle as $nom => $prix_HT)    {
             echo "<tr>\n" ;
             echo  "<td>"   "prix  hors taxe :    "  .$nom.$prix_HT.  "  "</th>" "         prix TTC:     ".($prix_HT*1.15)."</tr>";
        }
        ?>
        </table>
    </body>
</html>