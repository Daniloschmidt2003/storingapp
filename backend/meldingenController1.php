<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$type = $_POST['group'];
$news = $_POST['news'];
$prioriteit = $_POST['prioriteit'];
echo $attractie . " / " . $capaciteit . " / " . $melder . " / " . $type . " / " .$prioriteit;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = " INSERT INTO meldingen (attractie, type, capaciteit, melder)
VALUES(:attractie, :type, :capaciteit, :melder, prioriteit)";
//3. Prepare
$statement = $conn->prepare($query);

//4. Execute
$items = $statement->fetchAll(PDO::FETCH_ASSOC);
header("Location:../meldingen/index.php?msg=Meldingopgeslagen");
$statement ->execute([
    ":attractie" => $attractie, 
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":prioriteit" => $prioriteit,
]);

if(isset($_POST['$proiriteit']))
{
    $prioriteit = true;
}
else
{
    $prioriteit= false;
}

if(isset($_POST['$news']))
{
    $news = true;
}
else
{
    $news = false;
}