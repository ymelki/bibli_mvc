<?php

function getBook($id){
    $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

    // requete 
    
    $query="SELECT b.id as id_book, b.name as book_name, c.name as book_category
    FROM dblibrary.book as b 
    inner join dblibrary.category as c
    on b.category_id=c.id
    where b.id=:id;
    ";

    // 2 . Requete 

    $statement=$pdo->prepare($query);
    $statement->bindParam(":id",$id,PDO::PARAM_INT);

    $statement->execute();

    // 3 . Recupere
    $book=$statement->fetch(PDO::FETCH_ASSOC);

    return $book;


}
function getBooks() {
    // appel à la B.D.
    $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

    // requete 
    
    $query="SELECT b.id as id_book, b.name as book_name, c.name as book_category
    FROM dblibrary.book as b 
    inner join dblibrary.category as c
    on b.category_id=c.id";

    // 2 . Requete 

    $statement=$pdo->query($query);


    // 3 . Recupere
    $books=$statement->fetchAll(PDO::FETCH_ASSOC);

    return $books;

}

function removeBook($id){

    // 1 . Connecte à la B.D.
    $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

    // 2 requete de suppression
    //$pdo->exec("DELETE FROM category WHERE idcategory=$id");
    $statement=$pdo->prepare("DELETE FROM book WHERE id=:id");
    $statement->bindValue(":id",$id,PDO::PARAM_INT);
    $statement->execute();
}
