<?php

function getDrive() {
}

function getOpleiding() {
}

function getLinks() {
}

function getContact(){
}

function getBestel(){
}

function getPackages()
{
    $database = dbConnect();
    
    // select alleen de titels die overeen komen
    $statement = $database->query("SELECT * FROM pakketten");

    $results = [];

    // laat de titels op de pagina zien
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}
