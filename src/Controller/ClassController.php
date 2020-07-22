<?php

namespace Web\Controller;
use Web\Model\ClassManager;
use Web\Model\ClassRoom;

class ClassController
{
    protected $classController;

    public function __construct()
    {
        $this->classController = new ClassManager();
    }

    public function getAllClass()
    {
        $classes = $this->classController->getAllClass();
        include('src/View/Class/list.php');
    }
    public function addClass()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include('src/View/Class/add.php');
        }else{
            $name = $_REQUEST['name'];
            $status = $_REQUEST['status'];
            $class = new ClassRoom($name,$status);
            $this->classController->addClass($class);
            header('location:index.php?page=list-class');
        }
    }

}