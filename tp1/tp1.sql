--Exercice1
--transformation en schéma relationnel:
 Recettes(id (primary key) , Titre)
 Ingredients (Id (primary key,Nom)
 Catégories(Nom (PRIMARY KEY ),IdRecette(FOREIGN KEY))
 Utilasateurs(idIngredient(FOREIGN KEY),IdRecettes(FOREIGN KEY) quantité,unité)



--Exercice 3

-- La liste de tous les films (numéro de film, titre, prénom et nom du réalisateur), 

SELECT NumFilm,Titre,Prenom,Nom FROM `L2_Films` join L2_Individus WHERE 1

--2. Les informations relatives aux films de type "Drame" (numéro de film, titre, nom du réalisateur).

SELECT NumFilm,Titre,Nom from L2_Films join L2_Individus WHERE Genre ="Drame"

--3. Le nombre de films mémorisés par genre.

SELECT COUNT(NumFilm) 
from L2_Films join L2_Individus 
WHERE Nom = "genre"




--Exercice 4  
insert INTO Acteurs(NumInd,NumFilm)VALUES(9,SELECT NumFilm FROM L2_Films WHERE Titre = "Crash");
insert INTO Acteurs(NumInd,NumFilm)VALUES(9,1);
insert INTO Acteurs(NumInd,NumFilm)VALUES(10,1);
insert INTO Acteurs(NumInd,NumFilm)VALUES(11,1);
insert INTO Acteurs(NumInd,NumFilm)VALUES(8,2);
insert INTO Acteurs(NumInd,NumFilm)VALUES(5,3);
insert INTO Acteurs(NumInd,NumFilm)VALUES(6,3);
insert INTO Acteurs(NumInd,NumFilm)VALUES(7,3);
insert INTO Acteurs(NumInd,NumFilm)VALUES(3,4);
insert INTO Acteurs(NumInd,NumFilm)VALUES(4,4);
insert INTO Acteurs(NumInd,NumFilm)VALUES(1,5);
insert INTO Acteurs(NumInd,NumFilm)VALUES(2,5);
insert INTO Acteurs(NumInd,NumFilm)VALUES(4,5);
insert INTO Acteurs(NumInd,NumFilm)VALUES(16,7);



-- afficher pour chaque individu (numéro, prénom, nom), le nombre de films dans lequel il a joué.

SELECT Acteurs.NumInd, COUNT(NumFilm),Prenom,Nom 
FROM `Acteurs` join L2_Individus on Acteurs.NumInd= L2_Individus.NumInd 
group by NumInd




--afficher pour chaque individu (numéro, prénom, nom), le nombre de films dramatiques dans lequel il a joué.

SELECT Acteurs.NumInd, COUNT(Acteurs.NumFilm),Prenom,Nom
FROM `Acteurs` 
join L2_Individus on Acteurs.NumInd= L2_Individus.NumInd 
join L2_Films on L2_Individus.NumInd = L2_Films.NumFilm 
WHERE Genre ="Drame"
group by NumInd 
