<?php
    session_start();
    if(isset($_SESSION['anon_id'])){
        include_once "/home/hounaarc/nigma.hounaar.com/src/php/connection.php";
        $id= mysqli_real_escape_string($connection, $_GET['id']);
        if(isset($id)){
            $sql = mysqli_query($connection, "UPDATE users SET status = 'Offline' WHERE anon_id='{$id}'");
            if($sql){
                session_unset();
                session_destroy();
                header("location: https://nigma.hounaar.com/");
            }
        }else{
            header("location: https://nigma.hounaar.com/portal/");
        }
    }else{  
        header("location: https://nigma.hounaar.com/");
    }
?>