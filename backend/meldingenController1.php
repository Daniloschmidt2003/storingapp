<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$type = $_POST['type'];
$overig = $_POST['overig'];
if(isset($_POST['prioriteit']))
{
    $prioriteit = true;
}
else
{
    $prioriteit = false;
}

if(isset($_POST['newsletter']))
{
    $newsletter = true;
}
else
{
    $newsletter = false;
}
echo $attractie . " / " . $type . " / " . $capaciteit . " / " . $melder . " / " . $prioriteit . " / " . $overig;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, type, capaciteit, melder, prioriteit, overige_info)
VALUES(:attractie, :type, :capaciteit, :melder, :prioriteit, :overige_info)";
//3. Prepare
$statement = $conn->prepare($query);

$statement->execute([
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":type" => $type,
    ":prioriteit" => $prioriteit,
    ":overige_info" => $overig
]);

//4. Execute




$items = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Location:../meldingen/index.php?msg=Meldingopgeslagen");