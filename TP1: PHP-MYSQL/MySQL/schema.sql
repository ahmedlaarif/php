-- Créer la base de données MyDataBase
CREATE DATABASE IF NOT EXISTS MyDataBase;

-- Utiliser la base de données MyDataBase
USE MyDataBase;

-- Créer la table PRODUIT
CREATE TABLE IF NOT EXISTS PRODUIT (
    Id INT(6) PRIMARY KEY,
    PNOM VARCHAR(50),
    COULEUR VARCHAR(50),
    POIDS VARCHAR(20),
    PRIX INT(5)
);

-- Insérer 6 lignes dans la table PRODUIT
INSERT INTO PRODUIT (Id, PNOM, COULEUR, POIDS, PRIX) VALUES
(1, 'Produit1', 'Rouge', '2 Kg', 400),
(2, 'Produit2', 'Bleu', '3 Kg', 250),
(3, 'Produit3', 'Vert', '4 Kg', 350),
(4, 'Produit4', 'Jaune', '5 Kg', 200),
(5, 'Produit5', 'Noir', '1 Kg', 450),
(6, 'Produit6', 'Blanc', '6 Kg', 300);

-- Sélectionner tous les produits
SELECT * FROM PRODUIT;

-- Sélectionner les produits dont le prix est supérieur à 300DH et les ordonner par prix
SELECT * FROM PRODUIT WHERE PRIX > 300 ORDER BY PRIX;

-- Afficher le nom et la couleur des produits dont le poids est inférieur à 5 Kg et les ordonner par prix
SELECT PNOM, COULEUR FROM PRODUIT WHERE CAST(SUBSTRING(POIDS, 1, LENGTH(POIDS) - 2) AS DECIMAL) < 5 ORDER BY PRIX;

-- Modifier le prix du produit dont l'id est 3
UPDATE PRODUIT SET PRIX = 400 WHERE Id = 3;

-- Supprimer le dernier produit de la table
DELETE FROM PRODUIT ORDER BY Id DESC LIMIT 1;

-- Supprimer la table PRODUIT
DROP TABLE IF EXISTS PRODUIT;

