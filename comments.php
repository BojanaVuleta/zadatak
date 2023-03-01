<?php  
include "db.php";

    $id = $_GET['id'];
    $sql2 = "SELECT * FROM comments WHERE post_id = $id";
    $statement = $connection->prepare($sql2);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $comments = $statement->fetchAll();
?>
<?php 
    foreach ($comments as $comment) { ?>
         <li>
            <hr>
                <p>Comment by: <?php echo $comment['author']; ?></a></p>
                <p><?php echo $comment['text'] ?></p>
            <hr>
        </li>
 <?php } ?>
 