<?php


namespace Web\Controller;


use Web\Model\Score;
use Web\Model\ScoreManager;
use Web\Model\StudentManager;

class ScoreController
{
    protected $scoreController;
    protected $studentManager;

    public function __construct()
    {
        $this->scoreController = new ScoreManager();
        $this->studentManager = new StudentManager();
    }

    public function getAllScore()
    {
        $student_id = $_REQUEST['student_id'];
        $scores = $this->scoreController->getAllScore($student_id);
        $student = $this->studentManager->getStudentId($student_id);
        include("src/View/Score/list.php");
    }
}