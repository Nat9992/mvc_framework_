<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 15.10.16
 * Time: 01:41
 */
class controller
{
    protected $data;
    protected $model;
    protected $params;
    /**
     * @return mixed
     */
    public function getData(){
        return $this->data;
    }
    /**
     * @return mixed
     */
    public function getModel(){
        return $this->model;
    }
    /**
     * @return mixed
     */
    public function getParams(){
        return $this->params;
    }
    public function __construct($data = array()){
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }

}