<?php  

class connectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class brandsModel {

    private $mysqli;
    private $connectionObject;

    public function __construct($connectionObject) {
        $this->connectionObject = $connectionObject;
    }

    public function connect() {
        try {
            $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
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