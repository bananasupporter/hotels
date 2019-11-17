<?php

include('FileLoader.php');

class JsonToPhpObject
{
    /**
     * @return array
     * JSON String wird in ein PHP Array umgewandelt
     */
    function decoder() {
        $FileLoader = new FileLoader();

        return (array)json_decode($FileLoader->loadFile());

    }
}