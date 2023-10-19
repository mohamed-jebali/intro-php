<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Confirm</title>
</head>
<body>
    <style>
        .fa-check{
            margin-bottom:5rem;
        }
        .correct-response{
            color:lightgreen;
            text-align:center;
            margin-top:5rem;
        }
        .denied-response{
            color: red;
            text-align:center;
            margin-top:5rem;
        }
        .fa-xmark{
            color:red;
            margin-bottom:5rem;
        }
    </style>
</body>
</html>



<?php

$name = $_GET['name'];

if(!isset($name)){
    echo "<h1 class='denied-response'><i class='fa-solid fa-xmark fa-2x'></i> <br> Name Parameter not Found </h1>";
}
else{
    echo "<h1 class='correct-response'><i class='fa-solid fa-check fa-2x'></i> <br> Access Granted. You're signed. Welcome {$name}</h1>";
}


