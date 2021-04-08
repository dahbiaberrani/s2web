

-- --------------------------------------------------------
--
-- Structure de la table 'Categories'
--


CREATE TABLE IF NOT EXISTS Categories (
 
  Nomcategorie varchar(15) NOT NULL,
  PRIMARY KEY (Nomcategorie)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------
--
-- Structure de la table 'Ingredients'
--
Ingredients

CREATE TABLE IF NOT EXISTS test(
  Idingredient int(5) NOT NULL AUTO_INCREMENT,
  Nomingredient varchar(30) NOT NULL DEFAULT '',
  Prix float(10) DEFAULT NULL,
  PRIMARY KEY (IDingredient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Structure de la table 'Recettes'
--


CREATE TABLE IF NOT EXISTS Recettes (
  IDrecette int NOT NULL,
  Nom varchar(30) NOT NULL DEFAULT '',
  Descreption varchar(300) NOT NULL ,
  Nomcategorie varchar(15) NOT NULL,

  PRIMARY KEY (IDrecette),
  FOREIGN KEY (Nomcategorie) REFERENCES  Categories(Nomcategorie)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

--

-- Structure de la table 'Commentaires'
--


CREATE TABLE IF NOT EXISTS Commentaires (
  IDcommentaire int NOT NULL,
  IDrecette int NOT NULL,
  Datecommentaire date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (IDcommentaire),
  FOREIGN KEY (IDrecette) REFERENCES Recettes(IDrecette)
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-----------------------------------------------------
--
-- Structure de la table 'Compositions'


CREATE TABLE IF NOT EXISTS Compositions (
  IDingredient int NOT NULL,
  IDrecette int NOT NULL,
  quantite int NOT NULL,
  
  PRIMARY KEY (IDingredient,IDrecette),
  FOREIGN KEY (IDrecette) REFERENCES Recettes(IDrecette),
  FOREIGN KEY (IDingredient) REFERENCES Ingredients(IDingredient)
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



