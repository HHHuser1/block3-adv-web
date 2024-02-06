<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class partTypeConnectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class partTypeModel {

    private $mysqli;
    private $partTypeConnectionObject;

    public function __construct($partTypeConnectionObject) {
        $this->partTypeConnectionObject = $partTypeConnectionObject;
    }

    public function connect() {
        try {
            $mysqli = new mysqli($this->partTypeConnectionObject->host, $this->partTypeConnectionObject->username, $this->partTypeConnectionObject->password, $this->partTypeConnectionObject->database);
            if ($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch (Exception $e) {
            return false;
        }
    }

////////////////////////


    public function insertPartType($partTypeName) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $partTypeName = $mysqli->real_escape_string($partTypeName);
            $query = "INSERT INTO `partType` (`partTypeName`) VALUES ('$partTypeName')";

            $result = $mysqli->query($query);

            $mysqli->close();

            return $result;
        }

        return false;
    }

    public function getPartTypes() {
        $mysqli = $this->connect();

        if ($mysqli) {
            $query = "SELECT * FROM `partType` ORDER BY `partTypeNameID` DESC";
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

    public function getPartTypeNameById($partTypeNameID) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $partTypeNameID = $mysqli->real_escape_string($partTypeNameID);
            $query = "SELECT * FROM `partType` WHERE `partTypeNameID` = $partTypeNameID";

            $result = $mysqli->query($query);

            if ($result && $result->num_rows > 0) {
                $brand = $result->fetch_assoc();
                $mysqli->close();
                return $brand;
            }
        }

        return false;
    }

    public function updatePartTypeName($partTypeNameID, $partTypeName) {
        $mysqli = $this->connect();

        if ($mysqli) {
            $partTypeNameID = $mysqli->real_escape_string($partTypeNameID);
            $partTypeName = $mysqli->real_escape_string($partTypeName);

            $query = "UPDATE `partType` SET `partTypeName` = '$partTypeName' WHERE `partTypeNameID` = $partTypeNameID";

            $result = $mysqli->query($query);

            $mysqli->close();

            return $result;
        }

        return false;
    }









    // public function getBrandByID($brandID) {
    //     $mysqli = $this->connect();

    //     if ($mysqli) {
    //         $brandID = $mysqli->real_escape_string($brandID);
    //         $query = "SELECT * FROM `brandName` WHERE `brandID` = $brandID";

    //         $result = $mysqli->query($query);

    //         if ($result && $result->num_rows > 0) {
    //             $brand = $result->fetch_assoc();
    //             $mysqli->close();
    //             return $brand;
    //         }
    //     }

    //     return false;
    // }

    // public function updateBrand($brandID, $brandName) {
    //     $mysqli = $this->connect();

    //     if ($mysqli) {
    //         $brandID = $mysqli->real_escape_string($brandID);
    //         $brandName = $mysqli->real_escape_string($brandName);

    //         $query = "UPDATE `brandName` SET `brandName` = '$brandName' WHERE `brandID` = $brandID";

    //         $result = $mysqli->query($query);

    //         $mysqli->close();

    //         return $result;
    //     }

    //     return false;
    // }























}













?>