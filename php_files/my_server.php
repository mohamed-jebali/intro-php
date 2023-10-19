<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Server</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="https://www.creativefabrica.com/wp-content/uploads/2019/05/Server-icon-by-ahlangraphic-1-580x386.jpg" type="image/x-icon">
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
.fa-info{
    margin-bottom:5rem;
    border: 10px solid lightblue;
    border-radius:50%;
    width:100px;
    height:100px;
    padding:1rem;
}
.info-response{
    color:lightblue;
    text-align:center;
    margin-top:5rem;
}
</style>
    
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    if (empty($name) || empty($email) || empty($age)) {
        echo "<h1 class='info-response'><i class='fa-solid fa-info fa-3x'></i> <br> Please insert a value<h1>";
    } 
    elseif (strlen($name) < 3 || !is_numeric($age) || ($age < 18) || ($age > 90) || !str_contains($email,'@')) {
        echo "<h1 class='denied-response'><i class='fa-solid fa-xmark fa-2x'></i> <br> Access Denied Please insert Correct Values <h1>";
    }
     else {

        // Leggi i dati attuali dal file database.php
        $databaseFile = "database.php";
        $data = include($databaseFile);

        // Crea un nuovo record con i dati inviati
        $newRecord = [
            'name' => $name,
            'email' => $email,
            'age' => $age,
        ];

        // Aggiungi il nuovo record ai dati esistenti
        $data[] = $newRecord;

        // Scrivi i dati aggiornati nel file database.php
        file_put_contents($databaseFile, '<?php return ' . var_export($data, true) . ';');

        // Reindirizza a una pagina di conferma o esegui altre operazioni post-invio
        header("Location: confirm.php?name=" . urlencode($name));
    }
} else {
    echo "Invalid access";
}
?>
