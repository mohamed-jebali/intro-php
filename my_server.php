<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<style>
    .denied-response{
    color: red;
    text-align:center;
    margin-top:5rem;
}
.fa-xmark{
    color:red;
    margin-bottom:5rem;
}
.fa-check{
    margin-bottom:5rem;
}
.correct-response{
    color:lightgreen;
    text-align:center;
    margin-top:5rem;
}
</style>
    
</body>
</html>

<?php



$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if(empty($name) || empty($email) || empty($age)){
    echo 'Please insert a value';
}
elseif(strlen($name) < 3 || !is_numeric($age) || ($age < 18) || ($age > 90) || !str_contains($email,'@')){
    echo "<h1 class='denied-response'><i class='fa-solid fa-xmark fa-2x'></i> <br>
    Access Denied Please insert Correct Values <h1>";
}
else{
    echo "<h1 class='correct-response'><i class='fa-solid fa-check fa-2x'></i> <br> Access Granted Your'e signed <br> Welcome {$name}</h1>";
}




?>



<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->