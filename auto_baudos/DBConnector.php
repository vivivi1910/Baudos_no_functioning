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
    private $auto_baudos = "baudos_uz_greiti";

    private $conn;

    function __construct()
    {

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->auto_baudos);
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
    public function getAllCars()
    {
        $q = "SELECT * FROM `cars`;";
        return $this->conn->query($q);
    }

    // CRUD read 1 dalis
    public function getCarByID($id)
    {
        $q = "SELECT * FROM `cars` WHERE `id` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    // CRUD Create dalis
    public function addCar($car_number, $brand, $model, $year, $speed_limit, $speed_fixed)
    {
        $q = "INSERT INTO `cars` ( `car_number`, `brand`, `model`, `year`, `speed_limit`, `speed_fixed`, `fine`, `paid`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("sssiiiss", $car_number, $brand, $model, $year, $speed_limit, $speed_fixed, $fine, $paid);
        $stmt->execute();

        }


    // CRUD Delete dalis
    public function deleteCar($id)
    {
        $q = "DELETE FROM `cars` WHERE ``.`id` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    // CRUD update dalis
    public function updateCars($car_number, $brand, $model, $year, $speed_limit, $speed_fixed)
    {
        $q = "UPDATE `cars` SET `car_number` = ?,`brand` = ?,`model` = ?,`year` = ?, `speed_limit` = ?, `speed_fixed` = ?, `fine` = ?, `paid` = ? WHERE `id` = ?;";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("sssiiiss", $car_number, $brand, $model, $year, $speed_limit, $speed_fixed, $fine, $paid);
        $stmt->execute();
    }


    public function getGreiciu_lentele()
    {
        $q = "SELECT * FROM `cars`";
        return $this->conn->query($q);
    }



}
