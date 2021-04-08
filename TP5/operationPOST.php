<html>
  <head> <title>Addition, soustraction ou multiplication de 2 nombres</title> 

</head>
  <body>
	<?php
		if (empty($_POST['nb1']) or empty($_POST["nb2"])){
			echo "vous devez saisie le nb1 et nb2";
		}else{
			$nbre1=$_POST['nb1'];
			$nbre2=$_POST['nb2'];
			$op=$_POST['op'];

		}


  		if ($op=="somme") {
			$res=$nbre1+$nbre2;
			echo "<H1> Addition de 2 nombres</H1>";
			echo "<p>".$nbre1." + ".$nbre2." = ".$res."</p>";
		}
  		elseif($op=="sous") {
	
			$res=$nbre1-$nbre2;
			echo "<H1> Différence de 2 nombres</H1>";
			echo "<p>".$nbre1." - ".$nbre2." = ".$res."</p>";
		}elseif ($op=="mult"){
			$res=$nbre1 * $nbre2;
			echo "<H1> multiplication  de 2 nombres</H1>";
			echo "<p>".$nbre1." * ".$nbre2." = ".$res."</p>";
		}
	?>
</body>
</html>