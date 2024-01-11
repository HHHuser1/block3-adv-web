<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class brandConnectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class brandModel {

    private $mysqli;
    private $brandConnectionObject;

    public function __construct($brandConnectionObject) {
        $this->brandConnectionObject = $brandConnectionObject;
    }

    public function connect() {
        try {
            $mysqli = new mysqli($this->brandConnectionObject->host, $this->brandConnectionObject->username, $this->brandConnectionObject->password, $this->brandConnectionObject->database);
            if ($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch (Exception $e) {
            return false;
        }
    }

////////////////////////


    public function insertBrand($brandName) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $brandName = $mysqli->real_escape_string($brandName);
            $query = "INSERT INTO `brandName` (`brandName`) VALUES ('$brandName')";

            $result = $mysqli->query($query);

            $mysqli->close();

            return $result;
        }

        return false;
    }

    public function getBrands() {
        $mysqli = $this->connect();

        if ($mysqli) {
            $query = "SELECT * FROM `brandName`";
            $result = $mysqli->query($query);

            $brands = [];

            while ($row = $result->fetch_assoc()) {
                $brands[] = $row;
            }

            $mysqli->close();

            return $brands;
        }

        return [];
    }


    public function getBrandByID($brandID) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $brandID = $mysqli->real_escape_string($brandID);
            $query = "SELECT * FROM `brandName` WHERE `brandID` = $brandID";

            $result = $mysqli->query($query);

            if ($result && $result->num_rows > 0) {
                $brand = $result->fetch_assoc();
                $mysqli->close();
                return $brand;
            }
        }

        return false;
    }

    public function updateBrand($brandID, $brandName) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $brandID = $mysqli->real_escape_string($brandID);
            $brandName = $mysqli->real_escape_string($brandName);

            $query = "UPDATE `brandName` SET `brandName` = '$brandName' WHERE `brandID` = $brandID";

            $result = $mysqli->query($query);

            $mysqli->close();

            return $result;
        }

        return false;
    }























}













?>