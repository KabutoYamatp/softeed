<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 14/11/2017
 * Time: 09:08 PM
 */
class software extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model=new projectsModel($this->adapter);
    }

    public function index(){
        $this->loadView('public/software',array('lang'=>DEFAULT_LANG),$this->dataUser1);
    }
}