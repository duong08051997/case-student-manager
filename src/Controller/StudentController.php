<?php


namespace Web\Controller;


use Web\Model\ClassManager;
use Web\Model\StudentManager;

class StudentController
{
    protected $studentController;
    protected $classManager;

    public function __construct()
    {
        $this->studentController = new StudentManager();
        $this->classManager = new ClassManager();
    }
    public function getAllStudent()
    {
        $class_id = $_REQUEST['class_id'];
        $class= $this->classManager->getClassId($class_id);
        $students=$this->studentController->getAllStudent($class_id);
        include('src/View/Student/list.php');
    }

}