<?php
session_start();
include_once "/home/hounaarc/nigma.hounaar.com/src/php/connection.php";

if($_POST['answer']){
    $solver_id = $_SESSION['anon_id'];
    $answer = mysqli_real_escape_string($connection,$_POST['answer']);
    $query = $connection->query("SELECT * FROM riddles
    WHERE answer = '{$answer}'
    ");     
    if($query->num_rows>0){
        $solved_checking = $connection->query("SELECT * FROM riddles_status
        WHERE solver_id = '{$solver_id}' AND subject = '{$answer}' AND status = 'Solved'
        ");
        if($solved_checking->num_rows == 1){
            echo "You have already solved the riddle";
        } else {
            $insert = $connection->query("INSERT INTO riddles_status VALUES
            ('{$solver_id}','{$answer}','Solved')
            ");
            if($insert){
                echo "Solved";
            } else {
                echo "Something went wrong solving the riddle";
            }
        }
        } else {
            echo "The answer is not right";
        }
    }


?>