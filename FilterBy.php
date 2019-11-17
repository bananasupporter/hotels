<?php

include("ObjectConstructor.php");

class FilterBy
{

    /**
     * @param $data
     * @return array
     *
     * es sind weitere Filter-Funktionen möglich || dies ist "hardgekoded" :)
     */
    function filterByHotelIDAndArrivalDate($data) {
        $ObjectConstructor = new ObjectConstructor();

        return $ObjectConstructor->creator($data);
    }
}