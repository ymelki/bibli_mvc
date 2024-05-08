<?php
include "header.php";



// ROUTEUR : Lien entre URL => logique (controller)
// recuperation de l'url

if ((isset($_GET['page'])))
{
    $page=$_GET['page'];
}
else 
{
    $page="home";
}

// Read All
if ($page=="liste_book"){
    include_once __DIR__.'/Controller/BookController.php';
    displayBooks();
    
}
// Read one
if ($page=="book"){
    include_once __DIR__.'/Controller/BookController.php';
    displayBook();
}

// Remove
if ($page=="remove_books"){
    include_once __DIR__.'/Controller/BookController.php';
    removeBook();
}

if ($page=="home"){
    // logique
    include_once __DIR__.'/Controller/HomeController.php';    
    home();
}
if ($page=="category"){
    echo "Category";
}

if ($page=="vider_panier"){
    include_once __DIR__.'/Controller/CartController.php';
    clearCart();

    echo "je suis dans la page vider panier";
}