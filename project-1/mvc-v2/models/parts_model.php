<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class partsConnectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class partsModel {

    private $mysqli;
    private $partsConnectionObject;

    public function __construct($partsConnectionObject) {
        $this->partsConnectionObject = $partsConnectionObject;
    }

    public function connect() {
        try {
            $mysqli = new mysqli($this->partsConnectionObject->host, $this->partsConnectionObject->username, $this->partsConnectionObject->password, $this->partsConnectionObject->database);
            if ($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch (Exception $e) {
            return false;
        }
    }

    ////////////////////////
    public function getParts() {
        $parts = [];

        $sql = "SELECT parts.*, partType.partTypeName, brandName.brandName, compatibility.compatibleWith
                FROM parts
                JOIN partType ON parts.partTypeNameID = partType.partTypeNameID
                JOIN brandName ON parts.brandID = brandName.brandID
                JOIN compatibility ON parts.compatibilityID = compatibility.compatibilityID";

        $mysqli = $this->connect();
        $result = $mysqli->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $parts[] = $row;
            }
        }

        $mysqli->close();

        return $parts;
    
    }
    ////
    


    public function getPartByID($partID) {
        $sql = "SELECT * FROM parts WHERE partID = ?";
        $mysqli = $this->connect();
        
        // Use prepared statement
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $partID);
        
        // Execute the statement
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Fetch the part
        $part = $result->fetch_assoc();
        
        // Close the statement and connection
        $stmt->close();
        $mysqli->close();
        
        return $part;
    }



    // public function getPartById($partID)
    // {
    //     $sql = "SELECT * FROM parts WHERE partID = ?";
    //     $stmt = $this->mysqli->prepare($sql);
    //     $stmt->bind_param("i", $partID);

    //     if ($stmt->execute()) {
    //         $result = $stmt->get_result();
    //         $part = $result->fetch_assoc();
    //         $stmt->close();

    //         return $part;
    //     } else {
    //         return false;
    //     }
    // }

    public function insertPart($partName, $partTypeNameID, $brandID, $price, $compatibilityID)
    {
        $sql = "INSERT INTO parts (partName, partTypeNameID, brandID, price, compatibilityID) VALUES ('$partName', $partTypeNameID, $brandID, $price, $compatibilityID)";

        $mysqli = $this->connect();
        $result = $mysqli->query($sql);
        $mysqli->close();

        return $result;
    }

    // Add other methods as needed

    //////////////////

    public function getPartTypeNames() {
        $sql = "SELECT * FROM partType";
        return $this->getData($sql);
    }

    public function getBrands() {
        $sql = "SELECT * FROM brandName";
        return $this->getData($sql);
    }

    public function getCompatibility() {
        $sql = "SELECT * FROM compatibility";
        return $this->getData($sql);
    }

    private function getData($sql) {
        $mysqli = $this->connect();

        $result = $mysqli->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $mysqli->close();
        return $data;
    }
    ///////////////////////

    // public function updatePartName($partID, $partName) {
    //     $sql = "UPDATE parts SET partName = ? WHERE partID = ?";
    //     $stmt = $this->mysqli->prepare($sql);
    //     $stmt->bind_param("si", $partName, $partID);
    //     $stmt->execute();
    //     $stmt->close();
    // }

    public function updatePart($partID, $partName, $partTypeNameID, $brandID, $price, $compatibilityID){
        $sql = "UPDATE parts SET partName = '$partName', partTypeNameID = $partTypeNameID, brandID = $brandID, price = $price, compatibilityID = $compatibilityID WHERE partID = $partID";

        $mysqli = $this->connect();
        $result = $mysqli->query($sql);
        $mysqli->close();

        return $result;
    }








}

?>