<?php

function displayBooks(){
    echo "Books";
    include_once __DIR__.'/../Model/ModeleBook.php';

    $books=getBooks();
    include_once __DIR__.'/../Template/Books.php';

} 

function displayBook(){
    include_once __DIR__.'/../Model/ModeleBook.php';
    $id=$_GET['id'];
    $book=getBook($id);
    include_once __DIR__.'/../Template/Book.php';




}

// logique de supression
function removeBook(){
    // appel
    // connecter à la BD.
    // supprimer un enregistrement
    include_once __DIR__.'/../Model/ModeleBook.php';
    $id=$_GET['id'];
    removeBook($id);


    // rediriger vers la page books
    header("location:index.php?page=books");
}