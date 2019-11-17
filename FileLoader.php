<?php


class FileLoader
{
    /**
     * @return string
     * alternativ Funktion get(){} nutzen
     */
    function loadFile() {
        return (string)file_get_contents( __DIR__ . DIRECTORY_SEPARATOR . 'hotelsrates.json' );
    }
}