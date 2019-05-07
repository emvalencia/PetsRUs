<?php

    require_once "../../DBConnect.php";
    $pdo = connect();

    // get zip from query string 
    $zip = $_GET["zip"];

    $data = $pdo->query("select city from statezip where zip = ".$zip)->fetchAll();
    foreach ($data as $row) {
    }
    
    echo $row['city'];

?>