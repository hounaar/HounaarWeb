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
    <link rel="stylesheet" href="/src/css/other.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edward Nigma - Portal</title>
</head>
<body>
    <div class="container mt-5" id="main-body">
    <?php include_once "/home/hounaarc/nigma.hounaar.com/src/php/connection.php";?>
        <?php include_once "/home/hounaarc/nigma.hounaar.com/src/php/navbar.php";?>

            <hr>
            <div class="content">

            <?php 
            if(isset($connection)){
            $query = $connection->query("SELECT * FROM users WHERE
            anon_id = '{$_SESSION['anon_id']}'
            ");
            if($query->num_rows>0){
                while($row = $query->fetch_assoc()){

            
            ?>

                <div class="col">Username: <?php echo $row['username']; ?></div>
                <div class="col">Status: <?php echo $row['status'];?></div>
                <div class="col">Rank: <?php echo $row['rank'];?></div>
                <?php }}}?>
            </div>
        </div>

    </body>
    </html>