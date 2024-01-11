<?php
    function dbConnect() {
        $dsn = 'mysql:host=localhost;dbname=MyDataBase;charset=utf8';
        $username = 'user';
        $password = 'test';

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    function getPosts() {
        $pdo = dbConnect();

        $query = "SELECT * FROM MyGuests";
        $statement = $pdo->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function getPost($postId) {
        $pdo = dbConnect();

        $query = "SELECT firstname, lastname, reg_date FROM MyGuests WHERE Id = :postId";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':postId', $postId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function getComment($postId) {
        $pdo = dbConnect();
        
        $query = "SELECT firstname, comment_date, comment FROM Comments WHERE post_id = :postId";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':postId', $postId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
?>
