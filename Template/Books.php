<?php
// affichage
        
    foreach ($books as $book){ ?>
        Nom : 
        <a href="index.php?page=book&id=<?=$book['id_book']?>">
            <?=$book['book_name']?> 
        </a>
        - Catégorie :  <?=$book['book_category']?> 
        - <a href="edit_book.php?id=<?=$book['id_book']?>">
            Modifier
        </a> -
        <a href="supprimerbook.php?id=<?=$book['id_book']?>"> 
        Supprimer
        </a>
        <br>
    <?php
    }
    ?>
    <a href="add_book.php" class="btn btn-success">Add book</a>