
   
            <?php 
            //connexion à la base de donnees 
             function my_connect(){
            $connexion=mysqli_connect('mi-mariadb.univ-tlse2.fr','dahbia.berrani-eps-h','Akbou_2021');
            if (!connexion){
                echo ("désolé,connexion au serveur impossible\n");
                exit;
            }
            else {
                return $connexion;
            }
        }

            
            ?>
