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
    <link rel="stylesheet" href="/src/css/rules.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edward Nigma - Rules</title>
</head>
<body>
    <div class="container mt-5" id="rules">
    <?php include_once "/home/hounaarc/nigma.hounaar.com/src/php/navbar.php";?>

         <hr>
         <h3>Here are the rules</h3>
         <p>Hi and welcome to the <b>Edward Nigma Online Game Portal</b>
        in this game we encounter some riddles which have been created by <b>Riddler</b>
        and we try to find the suitable and appropriate answer for those.
        </p>
        <p>
            To acomplish the purpose you need to follow the instruction in <b>Riddles</b>
            tab and try to solve them. Mostly, Riddles can be answered by just typing in the type area.
            For each riddle, there are specific pages that have been created by the administrator and you just need to
            find the answer and type it. 
            If the answer was correct then you will recieve a success notification then you shall click back to 
            riddles page to find more riddles to answer.
            Overally there are 10 riddles for now. However, there would be more in the future where 
            you need to send a file to submit as an answer.
        </p>
        <p>If you complete all riddlers then you need to send a DM to the administrator in the <a href="https://bluepearl.hounaar.com/"><b>Blue Pearl Chat Portal Form</b></a>
        with your email. After at least one day, you shall receive an email which contains your reward.
        This is serious, <b>YOU WILL RECIEVE A REWARD IF ONLY YOU HAVE COMPELTED ALL 10 RIDDLES. AND
            I CAN ASSURE YOU THAT THE REWARD IS SOMETHING WORTED AND NICE.

        </b>
        </p>
        <p>I hope that you enjoy figuring out whats the answer.</p>
    </div>


    </body>
    </html>