<?php


class BodyCreator
{
    /**
     * @return string
     * die Filter-Funktion ist "hardgekodet" nur für HotelID und ArrivalDate
     *
     * (alternativ könnte das URL auf Parameter zerlegt werden und mehrere Filter-Funktionen nach diesen Paremetern schreiben)
     */
    function createBody(){
        if ($_SERVER['REQUEST_URI'] == "/api/HotelID/ArrivalDate/"){
            require_once 'JsonToPhpObject.php';
            require_once 'FilterBy.php';

            $JsonToPhpObject = new JsonToPhpObject();
            $filterBy = new FilterBy();

            return json_encode($filterBy->filterByHotelIDAndArrivalDate($JsonToPhpObject->decoder()));
        }
        else {
            return 'URL existiert nicht =(';
        }
    }
}