<?php

namespace Web\Controller;
use Web\Model\ClassManager;

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

}