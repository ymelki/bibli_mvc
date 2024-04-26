<?php

function displayBooks(){
    echo "Books";
    include __DIR__.'/../Model/ModeleBook.php';

    $books=getBooks();
    include __DIR__.'/../Template/Books.php';

} 

// logique de supression
function removeBook(){
    // appel
    // connecter à la BD.
    // supprimer un enregistrement
    include __DIR__.'/../Model/ModeleBook.php';
    $id=$_GET['id'];
    removeBook($id);


    // rediriger vers la page books
    header("location:index.php?page=books");
}