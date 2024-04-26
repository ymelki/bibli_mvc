test
<?php
// ROUTEUR : Lien entre URL => logique (controller)
// recuperation de l'url
$page=$_GET['page'];

if ($page=="home"){
    // logique
    include __DIR__.'/Controller/ControllerHome.php';    
    home();
}
if ($page=="books"){
    include __DIR__.'/Controller/ControllerBooks.php';
    displayBooks();
    
}

if ($page=="remove_books"){
    include __DIR__.'/Controller/ControllerBooks.php';
    removeBook();
    
}
if ($page=="category"){
    echo "Category";

    
}