<?php
include 'config.php';

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
    

        $query = "UPDATE commentaires SET name='$name', email='$email', comment='$comment' WHERE id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Donnée modifiée"); </script>';
            header("Location:commentaires.php");
        }
        else
        {
            echo '<script> alert("Donnée non modifiée"); </script>';
        }
    }
?>