<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 15.10.16
 * Time: 01:45
 */
class model
{
    protected $db;
    public function __construct(){
        $this->db = App::$db;
    }
}