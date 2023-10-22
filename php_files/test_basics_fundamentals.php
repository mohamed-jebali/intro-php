<?php


// DEFINIRE UNA COSTANTE IN PHP

// PRIMO METODO 
const PI = 3.14159;

echo "Valore PI greco: " . PI . "<br>";


const IVA = 0.22;

$prodotto = 100;

$tassa_prodotto = $prodotto * IVA;

$prodotto_tassato =  $prodotto - $tassa_prodotto;

echo "il prodotto applicato IVA al 22% " . $prodotto_tassato . "<br>";

//SECONDO METODO

define("AVOGADRO",6.02214);

echo "Valore di Avogadro " . AVOGADRO . "<br>";

// OOP (Object,Oriented,Programming)


class Animale {
    public $nome_animale;
    public $nome_razza;
    public $pelo;


    // COSTRUTTORE
    public function __construct(String $nome_animale, String $nome_razza , String $pelo) {
        $this->nome_animale = $nome_animale;
        $this->nome_razza = $nome_animale;
        $this->pelo = $pelo;
    }

    public function __toString() {
        return var_export($this, true);
    }
}


$gatto = new Animale("Mellow","Europeo","scuro");


echo "dati del tuo gatto" . $gatto;


var_dump($gatto);


// ARRAY NUMERICO TIPIZZATO

// $numeric_array = array(
//     0 => 10,
//     1 => 20,
//     2 => 30,
//     3 => 40
// );

// ARRAY NUMERICO NON TIPIZZATO

$numeric_array = [
    0 => 10,
    1 => 20,
    2 => 30,
    3 => 40
];

// FUNCTION WITH FOREACH

function mid_value(Array $numeric_array){
    $sum = 0; // SALVO IN MEMORIA UNA VARIABILE SOMMA FUORI DAL CICLO
    foreach ($numeric_array as $value) {
        $sum += $value; // SOMMO ZERO + 10 POI 10 + 20 POI 30 + 30 POI 60 + 40 OUT // $sum = 100 
    }
    
    $result = $sum / count($numeric_array); // VARIABILE RESULT DIVIDE PER LA LUNGHEZZA DELL'ARRAY CON IL METODO COUNT() CON LA VARIABILE SUM

    return $result; // PORTO A SCHERMO LA VARIABILE RESULT
}

$result_mid = mid_value($numeric_array); // SALVO IL RISULTATO ALL'INTERNO DI UNA VARIABILE METTO COME ARGOMENTO L'ARRAY IN QUESTIONE

echo "la media dei numeri è " . $result_mid . "<br>";




// CONDITIONAL WITH HTTP GET REQUEST

$password = isset($_GET['password']) ? $_GET['password'] : null; // CONTROLLO SE IL VALORE $password e settato o sia nullo


if(!isset($password) || !is_numeric($password)){
    echo "Acces Denied Please Insert a Valid Value";
}
else if($password == '1234'){
    echo "Acces granted";
}
else{
    echo "Acces Denied";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-assestment</title>
</head>
<body>
    <form action="./test_basics_fundamentals.php" method="GET">
        <input type="password" name="password" id="password" placeholder="inserisci la password per entrare">
        <input type="submit" value="send">
    </form>
<style>
    input{
        padding:1rem;
    }
</style>    
</body>
</html>