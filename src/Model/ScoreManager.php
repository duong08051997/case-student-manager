<?php


namespace Web\Model;


class ScoreManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllScore($student_id)
    {
        $sql = "SELECT * FROM `tbl_score` WHERE student_id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $student_id);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $scores = [];
        foreach ($data as $item) {
            $score = new Score($item['maths'], $item['physical'], $item['chemistry'], $item['english'], $item['student_id']);
            $score->setId($item['id']);
            array_push($scores, $score);
        }
        return $scores;
    }
}