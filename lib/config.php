<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 15.10.16
 * Time: 01:40
 */
class config
{
    protected static $settings = array();
    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }
    public static function set($key, $value){
        self::$settings[$key] = $value;
    }
}