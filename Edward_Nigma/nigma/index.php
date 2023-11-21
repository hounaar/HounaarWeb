<?php
session_start();
if(isset($_SESSION['anon_id'])){
    header("location: https://nigma.hounaar.com/portal/");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edward Nigma</title>
</head>
<body>

    <div class="container">
        <img src="/src/pics/logo.png" class="img-fluid src" alt="">

    </div>
    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col-md-5">
                <form method="POST" class="form-group login">
                    <h4>In order to play, you need to create an account first.</h4>
                    <input type="text" placeholder="Enter Username" name="username" class="form-control" required><br/>
                    <input type="password" placeholder="Enter Password" name="password" class="form-control" required><br/>
                    <button class="btn btn-success enter">Enter</button>
                    <div class="col error"></div>
                </form>
            </div>
            <div class="col-lg-5">
                <img src="/src/pics/riddler.png" class="img-fluid question" height="200" width="200" alt="">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/src/js/login.js"></script>
    
</body>
</html>