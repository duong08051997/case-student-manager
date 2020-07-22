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
    public function addScore($score)
    {
        $sql = "INSERT INTO `tbl_score`(`maths`, `physical`, `chemistry`, `english`, `student_id`) 
                VALUES (:maths, :physical, :chemistry, :english, :student_id)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":maths", $score->getMaths());
        $stmt->bindParam(":physical", $score->getPhysical());
        $stmt->bindParam(":chemistry", $score->getChemistry());
        $stmt->bindParam(":english", $score->getEnglish());
        $stmt->bindParam(":student_id", $score->getStudentId());
        $stmt->execute();
    }
    public function getScoreId($id)
    {
        $sql = "SELECT * FROM tbl_score WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateScore($score)
    {
        $sql = "UPDATE `tbl_score` SET `maths`= :maths,`physical`= :physical,`chemistry`= :chemistry,`english`= :english,`student_id`= :student_id WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $score->getId());
        $stmt->bindParam(":maths", $score->getMaths());
        $stmt->bindParam(":physical", $score->getPhysical());
        $stmt->bindParam(":chemistry", $score->getChemistry());
        $stmt->bindParam(":english", $score->getEnglish());
        $stmt->bindParam(":student_id", $score->getStudentId());
        $stmt->execute();
    }

}