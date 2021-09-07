<?php

class Log
{
    static public array $storage;
    static public $count;

    public static function addLog(string $date){
        self::$storage[] = [
            'date'  => $date,
            'count' => ++self::$count
        ];
    }

    public static function getStorage(){
        return self::$storage;
    }

}
