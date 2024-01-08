<?php

////////////////////////////////////


class connectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class userModel {
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

/////////////// this is the brands function but I called it users ////////
    public function selectUsers() {
        $mysqli = $this->connect();
        $results = []; // Initialize the variable
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM brandName order by brandID desc");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    


    public function insertUser($brandName, $countryOfOrigin) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("INSERT INTO brandName (brandName, countryOfOrigin) VALUES ('$brandName', '$countryOfOrigin')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function updateBrand($brandID, $brandName, $countryOfOrigin) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("UPDATE brandName SET brandName='$brandName', countryOfOrigin='$countryOfOrigin' WHERE brandID=$brandID");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    

///////////////////// INSERT PART TYPE /////////////////////
    public function insertPartType($partTypeName) {
        $mysqli = $this->connect();
    
        if ($mysqli) {
            $mysqli->query("INSERT INTO partType (partTypeName) VALUES ('$partTypeName')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }


/////////////// SELECT PART TYPE NAME ////////////////

    public function selectPartTypeName() {
        $mysqli = $this->connect();
        $results = []; // Initialize the variable
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM partType");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }


///////////////////////////////////////////////////////////    
//////////////////////INSERT COMPATIBILITY/////////////////
    public function insertCompatibility($compatibleWith) {
        $mysqli = $this->connect();

        if ($mysqli) {

            $mysqli->query("INSERT INTO compatibility (compatibleWith) VALUES ('$compatibleWith')");
            $mysqli->close();
            return true;
        } else {
            return false;
            }
    }

///////////////////////////////////

    public function selectCompatibility() {
        $mysqli = $this->connect();
        $results = []; // Initialize the variable
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM compatibility");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }
    
///////////////////////////////////
////// inserting parts ///////////

    public function insertPart($partName, $partTypeNameID, $brandID, $price, $compatibilityID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("INSERT INTO parts (partName, partTypeNameID, brandID, price, compatibilityID) 
                            VALUES ('$partName', $partTypeNameID, $brandID, $price, $compatibilityID)");

            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }


    

    public function selectParts() {
        $mysqli = $this->connect();
        $results = [];
    
        if ($mysqli) {
            $query = "SELECT parts.partID, parts.partName, partType.partTypeName, brandName.brandName, brandName.countryOfOrigin, parts.price, compatibility.compatibleWith
                      FROM parts
                      INNER JOIN partType ON parts.partTypeNameID = partType.partTypeNameID
                      INNER JOIN brandName ON parts.brandID = brandName.brandID
                      INNER JOIN compatibility ON parts.compatibilityID = compatibility.compatibilityID
                      ORDER BY parts.partID DESC";
    
            $result = $mysqli->query($query);
    
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
    
            $mysqli->close();
            return $results ? $results : false;
        } else {
            return false;
        }
    }
    




/////////getting part details ////////

    public function getPartDetails($partID) {
        $mysqli = $this->connect();
        $result = $mysqli->query("SELECT * FROM parts WHERE partID = $partID");

        if ($result && $result->num_rows > 0) {
            $partDetails = $result->fetch_assoc();
            $mysqli->close();
            return $partDetails;
        } else {
            $mysqli->close();
            return false;
        }
    }

    public function updatePart($partID, $partName, $brandID, $partTypeNameID, $price, $compatibilityID) {
        $mysqli = $this->connect();
        $partName = $mysqli->real_escape_string($partName);

        $result = $mysqli->query("UPDATE parts SET
            partName = '$partName',
            brandID = $brandID,
            partTypeNameID = $partTypeNameID,
            price = $price,
            compatibilityID = $compatibilityID
            WHERE partID = $partID");

        $mysqli->close();
        return $result;
    }


    public function getBrandNameById($brandID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $brandID = $mysqli->real_escape_string($brandID);

            $result = $mysqli->query("SELECT brandName FROM brandName WHERE brandID = '$brandID'");

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $mysqli->close();
                return $row['brandName'];
            } else {
                $mysqli->close();
                return false; // Brand not found
            }
        } else {
            return false; // Database connection error
        }
    }


    public function getPartTypeNameById($partTypeNameID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $partTypeNameID = $mysqli->real_escape_string($partTypeNameID);

            $result = $mysqli->query("SELECT partTypeName FROM partType WHERE partTypeNameID = '$partTypeNameID'");

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $mysqli->close();
                return $row['partTypeName'];
            } else {
                $mysqli->close();
                return false; // Part type not found
            }
        } else {
            return false; // Database connection error
        }
    }

    public function getCompatibilityById($compatibilityID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $compatibilityID = $mysqli->real_escape_string($compatibilityID);

            $result = $mysqli->query("SELECT compatibleWith FROM compatibility WHERE compatibilityID = '$compatibilityID'");

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $mysqli->close();
                return $row['compatibleWith'];
            } else {
                $mysqli->close();
                return false; // compatibility not found
            }
        } else {
            return false; // Database connection error
        }
    }

//////////////////////////////////


    public function deletePart($partID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $partID = $mysqli->real_escape_string($partID);

            $result = $mysqli->query("DELETE FROM parts WHERE partID = '$partID'");

            $mysqli->close();
            return $result;
        } else {
            return false; // Database connection error
        }
    }




//////////////////////////////////




        public function getBrandDetails($brandID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM brandName WHERE brandID = $brandID order by brandID desc");
            $brandDetails = $result->fetch_assoc();
            $mysqli->close();
            return $brandDetails;
        } else {
            return false;
        }
    }


    public function deleteBrand($brandID) {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("DELETE FROM brandName WHERE brandID = $brandID");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}













?>
