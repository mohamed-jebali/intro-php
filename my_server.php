
<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if(empty($name) || empty($email) || empty($age)){
    echo 'Please insert a value';
}
elseif(strlen($name) < 3 || !is_numeric($age) || ($age < 18) || !str_contains($email,'@')){
    echo 'Access Denied';
}
else{
    echo 'Access Granted';
}



?>



<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->