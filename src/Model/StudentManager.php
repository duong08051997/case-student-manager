<?php


namespace Web\Model;


class StudentManager
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllStudent($class_id)
    {
        $sql = "SELECT * FROM tbl_student WHERE class_id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $class_id);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id']);
            $student->setId($item['id']);
            array_push($students, $student);
        }
        return $students;
    }
    public function addStudent($student)
    {
        $sql = "INSERT INTO tbl_student( `name`, `age`, `gender`, `address`, `email`,`class_id`) VALUES (:name ,:age, :gender, :address, :email,:class_id)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":age", $student->getAge());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":class_id", $student->getClassId());
        $stmt->execute();
    }

}