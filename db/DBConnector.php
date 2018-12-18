<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/6/2018
 * Time: 13:16
 */

class DBConnector
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "kcs";

    private $conn;

    function __construct()
    {

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function printAnyTable($result)
    {
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

    // CRUD Read all dalis
    public function getAllStudents()
    {
        $q = "SELECT * FROM `students`;";
        return $this->conn->query($q);
    }

    // CRUD read 1 dalis
    public function getStudentByID($id)
    {
        $q = "SELECT * FROM `students` WHERE `ID` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    // CRUD Create dalis
    public function addStudent($Name, $Surname, $Phone, $email)
    {
        $q = "INSERT INTO `students` ( `Name`, `Surname`, `Phone`, `email`) VALUES ( ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("ssss", $Name, $Surname, $Phone, $email);
        $stmt->execute();
    }

    // CRUD Delete dalis
    public function deleteStudent($id)
    {
        $q = "DELETE FROM `students` WHERE `students`.`ID` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $ID);
        $stmt->execute();
    }

    // CRUD update dalis
    public function updateStudent($ID, $Name, $Surname, $Phone, $email)
    {
        $q = "UPDATE `students` SET `Name` = ?,`Surname` = ?,`Phone` = ?,`Email` = ? WHERE `ID` = ?;";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("ssssi", $Name, $Surname, $Phone, $email, $ID);
        $stmt->execute();
    }


    public function getUzduotis1_6() //6
    {
        $q = "SELECT * FROM `students` ORDER BY `Name` ASC;";
        return $this->conn->query($q);
    }

    public function getUzduotis1_7() //7
    {
        $q = "SELECT * FROM `students` WHERE `Name` LIKE '%as' AND `Surname` LIKE '%as' ORDER BY `Surname` DESC ;";
        return $this->conn->query($q);
    }

    public function getUzduotis1_8() //8
    {
        $q = "SELECT * FROM `students_address` WHERE `City` = 'Kaunas';";
        return $this->conn->query($q);
    }

    public function getUzduotis1_9() //9
    {
        $q = "SELECT * FROM `students_address` WHERE `Postcode` IS NOT NULL;";
        return $this->conn->query($q);
    }

    public function getUzduotis1_10() //10
    {
        $q = "SELECT * FROM `students_address` WHERE `Postcode` IS NOT NULL;";
        return $this->conn->query($q);
    }

    public function getUzduotis1_11() //11
    {
        $q = "SELECT * FROM `student_marks` ORDER BY `Mark` DESC;";
        return $this->conn->query($q);
    }

    public function getUzduotis1_12() //12
    {
        $q = "SELECT count(*) as `max` FROM `student_marks` WHERE `Mark` = 10";
        return $this->conn->query($q);
    }

    public function getUzduotis1_13() //13
    {
        $q = "SELECT * FROM `student_marks` WHERE `Mark` > 6;";
        return $this->conn->query($q);
    }

    public function getUzduotis1_14() //14
    {
        $q = "UPDATE `students_address` SET `Street` = 'Centrine' WHERE `City` IN ('Vilnius','Kaunas');";
        $stmt = $this->conn->prepare($q);
       return $stmt->execute();

    }

    public function getUzduotis1_15() //15
    {
        $q = "SELECT * FROM `students` LEFT JOIN `students_address` ON `students_address`.`Student_id` = `students`.`ID`";
        return $this->conn->query($q);
    }

    public function getUzduotis11() //16
    {
        $q = "SELECT * FROM `students` LEFT JOIN `students_address` ON `students_address`.`Student_id` = `students`.`ID`";
        return $this->conn->query($q);
    }


}
