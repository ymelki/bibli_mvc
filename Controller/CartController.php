<?php

include_once __DIR__.'/../Service/cart.php';
function clearCart(){
    // suppression de la session elle va etre par une fonction 
    // a part

    clearCartAll();
    header('location:index.php?page=books');
}