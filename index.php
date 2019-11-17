<?php


header('Content-Type: application/json');

/**
 * $JsonToPhpObject ist ein PHP Objekt aus hotelsrates.json
 * die Filter-Funktion ist "hardgekodet" nur für HotelID und ArrivalDate
 *
 * (alternativ könnte das URL auf Parameter zerlegt werden und mehrere Filter-Funktionen nach diesen Paremetern schreiben)
 */

if ($_SERVER['REQUEST_URI'] == "/api/HotelID/ArrivalDate/"){
    require_once 'JsonToPhpObject.php';
    require_once  'FilterBy.php';

    $JsonToPhpObject = new JsonToPhpObject();
    $filterBy = new FilterBy();

    echo json_encode($filterBy->filterByHotelIDAndArrivalDate($JsonToPhpObject->decoder()));
}
else {
    echo 'URL existiert nicht =(';
}

