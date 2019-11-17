<?php


class ObjectConstructor
{

    /**
     * stdClass ist eine leere Klasse, die benutzt wird um Objekte zu erstellen. Vgl. Java oder Python
     * ich bin davon ausgegangen, dass ArrivalDate das Gleiche wie targetDay ist
     *
     * sonstiges lässt sich von alleine erklären ;)
     */

    /**
     * @param $data
     * @return array
     */
    function creator($data){
        $resultArray;

        foreach($data as $item){
            $object = $this->createObject();
            $object->hotelID = $this->addHotelID($item);

            foreach($item->hotelRates as $item2) {
                $object->arrivalDate = $this->addArrivalDate($item2);
            }

            $resultArray[] = $object;
        }

        return $resultArray;
    }

    /**
     * @return stdClass
     */
    function createObject(){
        $object = new stdClass();
        return $object;
    }

    /**
     * @param $item
     * @return mixed
     */
    function addHotelID($item){
        return $item->hotel->hotelID;
    }

    /**
     * @param $item
     * @return mixed
     */
    function addArrivalDate($item){
        return $item->targetDay;
    }
}