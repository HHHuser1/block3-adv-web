<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class compatibilityConnectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class compatibilityModel {

    private $mysqli;
    private $compatibilityConnectionObject;

    public function __construct($compatibilityConnectionObject) {
        $this->compatibilityConnectionObject = $compatibilityConnectionObject;
    }

    public function connect() {
        try {
            $mysqli = new mysqli($this->compatibilityConnectionObject->host, $this->compatibilityConnectionObject->username, $this->compatibilityConnectionObject->password, $this->compatibilityConnectionObject->database);
            if ($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch (Exception $e) {
            return false;
        }
    }

////////////////////////


    public function insertCompatibility($compatibleWith) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $compatibleWith = $mysqli->real_escape_string($compatibleWith);
            $query = "INSERT INTO `compatibility` (`compatibleWith`) VALUES ('$compatibleWith')";

            $result = $mysqli->query($query);

            $mysqli->close();

            return $result;
        }

        return false;
    }

    public function getCompatibility() {
        $mysqli = $this->connect();

        if ($mysqli) {
            $query = "SELECT * FROM `compatibility` ORDER BY `compatibilityID` DESC";
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

    public function getCompatibilityById($compatibilityID) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $compatibilityID = $mysqli->real_escape_string($compatibilityID);
            $query = "SELECT * FROM `compatibility` WHERE `compatibilityID` = $compatibilityID";

            $result = $mysqli->query($query);

            if ($result && $result->num_rows > 0) {
                $brand = $result->fetch_assoc();
                $mysqli->close();
                return $brand;
            }
        }

        return false;
    }

    public function updateCompatibility($compatibilityID, $compatibleWith) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $compatibilityID = $mysqli->real_escape_string($compatibilityID);
            $compatibleWith = $mysqli->real_escape_string($compatibleWith);

            $query = "UPDATE `compatibility` SET `compatibleWith` = '$compatibleWith' WHERE `compatibilityID` = $compatibilityID";

            $result = $mysqli->query($query);

            $mysqli->close();

            return $result;
        }

        return false;
    }





}







?>