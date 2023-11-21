<?php
session_start();
if(!isset($_SESSION['anon_id'])){
    header("location: https://nigma.hounaar.com/");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/riddles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edward Nigma - Riddles</title>
</head>
<body>
    <div class="container mt-5" id="riddles">
    <?php include_once "/home/hounaarc/nigma.hounaar.com/src/php/connection.php";?>
        <?php include_once "/home/hounaarc/nigma.hounaar.com/src/php/navbar.php";?>
         <hr>
     
            <div class="content">
            <?php 

         if(isset($connection)){
            $solver_id = $_SESSION['anon_id'];
            $query = $connection->query("SELECT * FROM
            riddles_status WHERE solver_id = '{$solver_id}' AND status = 'Solved'
            ");
            if($query->num_rows>0){
                while($row = $query->fetch_assoc()){
                    echo '
                   
                    <div class="col">??  '.$row['subject'].'  ??</div>';
                }
            } else {
                echo 'There are no riddles yet.';
            }
         }
         
         ?>
             </div>
    </div>
</body>
</html>