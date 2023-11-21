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
    <link rel="stylesheet" href="/src/css/all_riddles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edward Nigma - Ode</title>
</head>
<body>

<div class="container mt-5" id="riddle-page">

    <div class="animate__animated animate__fadeInDown">
    <div class="col riddleme">
        RIDDLE ME THIS
    </div>
    <div class="col riddleself">
    <h3>
        THERE IS NO ONE HUNGER THAN I AM.
        I USED TO WAKE UP AT 4 AND CURRENTLY I HAVE 3 DAUGHTERS.
        WHO AM I?
    </h3>
</div>
    </div>

    <form action="" class="form-group answer mt-5 animate__animated animate__fadeInDown">
        <h2>Answer here</h2>
        <input type="text" class="form-control" name="answer" required><br/>
        <button class="btn btn-success submit">Apply</button>
        <div class="col mt-3 error"></div>
        <div class="col mt-3 success"></div>
        <a href="/portal/riddles/" class="back mt-5 btn btn-primary">
        Back to riddles
    </a>
    </form>
</div>

<script type="text/javascript" src="/src/js/answers/ther.js"></script>

    </body>
    </html>