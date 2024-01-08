<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);



    // include_once 'models/model.php';
   
    // class Controller {
    //     private $model;
    //     public function __construct($connection) {
    //         $this->model = new userModel($connection);
    //     }
    //     public function showUsers() {
    //         $users = $this->model->selectUsers();
    //         include 'views/home.php';
    //     }
    //     public function showForm() {
    //         include 'views/form.php';
    //     }
    //     public function add() {
    //         $brand = $_POST['brand'];
    //         if(!$brand) {
    //             echo "<p>Missing information</p>";
    //             $this->showForm();
    //             return;
    //         } else if($this->model->insertUser($brand)) {
    //             echo "<p>Added user: $brand</p>";
    //             echo "<p><a href='./index.php'>Home</a></p>";
    //         } else {
    //             echo "<p>Could not add user</p>";
    //         }
    //         // $this->showUsers();
    //     }
    // }

    // include_once 'controllers/connection.php';
    // $connection2 = new connectionObject($host, $username, $password, $database);
    // $controller = new Controller($connection2);

    // // $controller->showUsers();
    // // $controller->showForm();
    // // $controller->add();
    // // if page gets information, add it
    // // otherwise show form
    // // if(isset($_POST['submit'])) {
    // //     $controller->add();
    // // } else {
    // //     $controller->showForm();
    // // }



    //////////////////////////////////////////


    

//     include_once 'models/model.php';

//     class Controller {
//         private $model;
    
//         public function __construct($connection) {
//             $this->model = new userModel($connection);
//         }
    
//         public function showUsers() {
//             $users = $this->model->selectUsers();
//             include 'views/home.php';
//         }
    
//         public function showAddForm() {
//             include 'views/form_add.php';
//         }
    
// // Controller.php

//         public function add() {
//             $brand = $_POST['brand'];
//             $countryOfOrigin = $_POST['countryOfOrigin']; // Add this line to get countryOfOrigin

//             if (!$brand || !$countryOfOrigin) {
//                 echo "<p>Missing information</p>";
//                 $this->showAddForm();
//                 return;
//             } else if ($this->model->insertUser($brand, $countryOfOrigin)) {
//                 echo "<p>Added brand: $brand, Country: $countryOfOrigin</p>";
//             } else {
//                 echo "<p>Could not add brand</p>";
//             }
//             // $this->showUsers();
//         }

    
//         public function handleActions() {
//             if (isset($_POST['edit'])) {
//                 $brandID = $_POST['brandID'];
//                 $this->showEditForm($brandID);
//             } elseif (isset($_POST['delete'])) {
//                 $brandID = $_POST['brandID'];
//                 $this->deleteBrand($brandID);
//             } elseif (isset($_POST['update'])) {
//                 $brandID = $_POST['brandID'];
//                 $brandName = $_POST['brandName'];
//                 $countryOfOrigin = $_POST['countryOfOrigin'];
//                 $this->updateBrand($brandID, $brandName, $countryOfOrigin);
//             } else {
//                 $this->showAddForm(); // Corrected to showAddForm() instead of showForm()
//             }
//         }
    
//         public function showEditForm($brandID) {
//             $brandDetails = $this->model->getBrandDetails($brandID);
//             include 'views/form_edit.php';
//         }
    
//         public function updateBrand($brandID, $brandName, $countryOfOrigin) {
//             if ($this->model->updateBrand($brandID, $brandName, $countryOfOrigin)) {
//                 echo "<p>Updated brand with ID: $brandID</p>";
//             } else {
//                 echo "<p>Could not update brand</p>";
//             }
//             // $this->showUsers();
//         }
    
//         public function deleteBrand($brandID) {
//             if ($this->model->deleteBrand($brandID)) {
//                 echo "<p>Deleted brand with ID: $brandID</p>";
//             } else {
//                 echo "<p>Could not delete brand</p>";
//             }
//             // $this->showUsers();
//         }
//     }
    
//     include_once 'controllers/connection.php';
//     $connection2 = new connectionObject($host, $username, $password, $database);
//     $controller = new Controller($connection2);
    
//     if (isset($_POST['submit'])) {
//         $controller->add();
//     } else {
//         $controller->handleActions();
//     }
    
    
    


//////////////////////////////





include_once 'models/model.php';

class Controller {
    private $model;

    public function __construct($connection) {
        $this->model = new userModel($connection);
    }

    public function showUsers() {
        $users = $this->model->selectUsers();
        include 'views/brands.php';
    }
    

    public function showPartTypeName() {
        $partTypeNames = $this->model->selectPartTypeName();
        include 'views/parttypes.php';
    }

    public function showCompatibility() {
        $compatibleWith = $this->model->selectCompatibility();
        include 'views/compatibility.php';
    }

    public function showAddForm() {
        include 'views/form_add.php';
    }
    

    public function showParts() {
        $parts = $this->model->selectParts();
        include 'views/parts.php';
    }

    // public function getPartDetails($partID) {
    //     return $this->model->selectPartDetails($partID);
    // }
    




    public function add() {
        $brandName = $_POST['brandName'];
        $countryOfOrigin = $_POST['countryOfOrigin'];

        if (!$brandName || !$countryOfOrigin) {
            echo "<p>Missing information</p>";
            $this->showAddForm();
            return;
            
        } else if ($this->model->insertUser($brandName, $countryOfOrigin)) {
            // echo "<p>Added brand: $brandName, Country of Origin: $countryOfOrigin</p>";
            // $this->showAddForm();
            $_SESSION['success_message'] = "Added brand Name: $brandName, Country of Origin: $countryOfOrigin";
            header("Location: index.php");
            exit();
        } else {
            echo "<p>Could not add brand</p>";
        }
        // $this->showUsers();
    }

    // public function handleActions() {
    //     if (isset($_POST['edit'])) {
    //         $brandID = $_POST['brandID'];
    //         $this->showEditForm($brandID);
    //     } elseif (isset($_POST['delete'])) {
    //         $brandID = $_POST['brandID'];
    //         $this->deleteBrand($brandID);
    //     } else {
    //         // Ensure the add form is shown by default
    //         $this->showAddForm();
    //     }
    // }


    // public function handleActions() {
    //     if (isset($_POST['edit'])) {
    //         $brandID = $_POST['brandID'];
    //         $this->showEditForm($brandID);
    //     } elseif (isset($_POST['confirmDelete'])) {
    //         $brandID = $_POST['confirmDelete'];
    //         $this->confirmDelete($brandID);
    //     } elseif (isset($_POST['delete'])) {
    //         $brandID = $_POST['brandID'];
    //         $this->deleteBrand($brandID);
            
    //     } else {
    //         $this->showAddForm();
    //     }
    // }

    // public function confirmDelete($brandID) {
    //     // Show a confirmation message and ask the user to confirm again
    //     echo "<form method='post' action=''>
    //             <input type='hidden' name='brandID' value='{$brandID}'>
    //             <p>Are you sure you want to delete this brand? $brandID</p>
    //             <button type='submit' name='delete' value='{$brandID}'>Yes, Delete</button>
    //             <button type='submit' name='cancelDelete'>Cancel</button>
    //           </form>";
    // }

    ///////////////////////

    // public function handleActions() {
    //     // $this->showAddForm();
    //     if (isset($_GET['action'])) {
    //         $action = $_GET['action'];
    //                     // Invoke the corresponding method based on the action
    //         switch ($action) {
    //             case 'showParts':
    //             $this->showParts();
    //             break;
    //             // Add other cases as needed
    //             case 'showUsers':
    //             $this->showUsers();
    //             break;
    //             case 'showPartTypeName':
    //             $this->showPartTypeName();
    //             break;
    //             case 'showCompatibility':
    //             $this->showCompatibility();
    //             break;
    //         }
            
    //     } else
    //     if (isset($_POST['edit'])) {
    //         $brandID = $_POST['brandID'];
    //         $this->showEditForm($brandID);
    //     } elseif (isset($_POST['confirmDelete'])) {
    //         $brandID = $_POST['confirmDelete'];
    //         $this->confirmDelete($brandID);
    //     } elseif (isset($_POST['delete'])) {
    //         $brandID = $_POST['brandID'];
    //         $this->deleteBrand($brandID);
    //     // } elseif (isset($_POST['cancelDelete'])) {
    //     //     // Handle cancel delete action if needed
    //     //     $this->showAddForm();
    //     } elseif (isset($_POST['submitPartType'])) {
    //         $this->addPartType();
    //     } elseif (isset($_POST['submitCompatibility'])) {
    //         $this->addCompatibility();
    //     } elseif (isset($_POST['submitPart'])) {
    //         $this->addPart();
    //     } elseif (isset($_POST['editPart'])) {
    //         $partID = $_POST['partID'];
    //         $this->showEditPartForm($partID);
    //     } elseif (isset($_POST['submitPart'])) {
    //         $this->addPart();
    //     } elseif (isset($_POST['submitEditPart'])) {
    //         $this->editPart();
    //     // } elseif (isset($_POST['deletePart'])) {
    //         // $this->deletePart();
    //     } elseif (isset($_POST['deletePart'])) {
    //         $partID = $_POST['partID'];
    //         $this->deletePart($partID);

    //     } elseif (isset($_POST['confirmDeletePart'])) {
    //             $partID = $_POST['partID'];
    //             $this->confirmDeletePart($partID);
            
        
    //     } else {
    //         $this->showAddForm();
    //         $this->showAddPartTypeForm();
    //         $this->showAddCompatibilityForm();
    //         $this->showAddPartForm();
    //     }
    // }


    public function handleActions() {
        // $this->showAddForm();
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            // Invoke the corresponding method based on the action
            
            switch ($action) {
                case 'showParts':
                    $this->showParts();
                    break;
                // Add other cases as needed
                case 'showUsers':
                    $this->showUsers();
                    break;
                case 'showPartTypeName':
                    $this->showPartTypeName();
                    break;
                case 'showCompatibility':
                    $this->showCompatibility();
                    break;
                case 'showEditPartForm':
                    $partID = $_POST['partID'];
                    $this->showEditPartForm($partID);
                    if(isset($_POST['updatePart'])) {
                        $this->editPart();
                    // }else {
                    //     if(isset($_POST['cancelEditPart'])) {
                    //         header("Location: ?action=showParts");
                    //         $this->showParts();
                    //     }
                    // }
                    }
                    
                    $this->showParts();
                    break;
                // case 'submitEditPart':
                //     $this->editpart();
                //     break;
                case 'confirmDeletePart':
                    $partID = $_POST['partID'];
                    $this->confirmDeletePart($partID);
                    if(isset($_POST['deletePart'])) {
                        $this->deletePart($partID);
                    }else {
                        if(isset($_POST['cancelDeletePart'])) {
                            header("Location: ?action=showParts");
                        }
                    }
                    $this->showParts();
                    break;

                case "showEditForm":
                    $brandID = $_POST['brandID'];
                    $this->showEditForm($brandID);
                    $this->showUsers();
                    break;
                case 'update':
                    if(isset($_POST['update'])) {
                        $brandID = $_POST['brandID'];
                        $this->update($brandID);
                        header("Location: ?action=showUsers");
                    } else {
                        if(isset($_POST['cancelEdit'])) {
                            header("Location: ?action=showUsers");
                        }
                        break;
                    }

                case 'showParts':
                    $this->showParts(); 
                    break;
            }
            
        } else {
            if (isset($_POST['edit'])) {
                $brandID = $_POST['brandID'];
                $this->showEditForm($brandID);
            } elseif (isset($_POST['confirmDelete'])) {
                $brandID = $_POST['confirmDelete'];
                $this->confirmDelete($brandID);
            } elseif (isset($_POST['delete'])) {
                $brandID = $_POST['brandID'];
                $this->deleteBrand($brandID);
            } elseif (isset($_POST['submitPartType'])) {
                $this->addPartType();
            } elseif (isset($_POST['submitCompatibility'])) {
                $this->addCompatibility();
            } elseif (isset($_POST['submitPart'])) {
                $this->addPart();
            } elseif (isset($_POST['editPart'])) {
                $partID = $_POST['partID'];
                $this->showEditPartForm($partID);
            } elseif (isset($_POST['submitEditPart'])) {
                $this->editPart();
            } elseif (isset($_POST['cancelEditPart'])) {
                header("Location: ?action=showParts");
            } elseif (isset($_POST['deletePart'])) {
                $partID = $_POST['partID'];
                $this->deletePart($partID);
            } elseif (isset($_POST['confirmDeletePart'])) {
                $partID = $_POST['partID'];
                $this->confirmDeletePart($partID);
            } else {
                $this->showAddForm();
                $this->showAddPartTypeForm();
                $this->showAddCompatibilityForm();
                $this->showAddPartForm();
            }
        }
    }
    





    

    public function confirmDelete($brandID) {
        // Retrieve brand details
        $brandDetails = $this->model->getBrandDetails($brandID);

        // Display confirmation message with brand details
        echo "<form method='post' action=''>
                <input type='hidden' name='brandID' value='{$brandID}'>
                <p>Are you sure you want to delete this brand?</p>
                <p>Brand ID: {$brandID}</p>
                <p>Brand Name: {$brandDetails['brandName']}</p>
                <p>Country of Origin: {$brandDetails['countryOfOrigin']}</p>
                <button type='submit' name='delete' value='{$brandID}'>Yes, Delete</button>
                <button type='submit' name='cancelDelete'>Cancel</button>
              </form>";
    }

    public function deleteBrand($brandID) {
        $brandDetails = $this->model->getBrandDetails($brandID);
        if ($this->model->deleteBrand($brandID)) {
            echo "<p>Deleted brand with ID: $brandID , Brand Name: {$brandDetails['brandName']} , Country of Origin: {$brandDetails['countryOfOrigin']}</p>";
            
        } else {
            echo "<p>Could not delete brand</p>";
        }
        // $this->showUsers();
    }



    public function showEditForm($brandID) {
        $brandDetails = $this->model->getBrandDetails($brandID);
        include 'views/form_edit.php';
    }

    public function update($brandID) {
        $brandName = $_POST['brandName'];
        $countryOfOrigin = $_POST['countryOfOrigin'];
        
        if (!$brandName || !$countryOfOrigin) {
            echo "<p>Missing information</p>";
            $this->showEditForm($brandID);
        }else if ($this->model->updateBrand($brandID, $brandName, $countryOfOrigin)) {
            // echo "<p>Updated brand with ID: $brandID , Brand Name: $brandName, Country of Origin: $countryOfOrigin</p>";
            $_SESSION['success_message'] = "Updated brand with ID: $brandID , Brand Name: $brandName, Country of Origin: $countryOfOrigin";
        } else {
            echo "<p>Could not update brand</p>";
        }
        // $this->showUsers();
    }




    ////// ADD PART TYPE FORM //////////
    public function showAddPartTypeForm() {
        include 'views/form_add_part_type.php';
    }


    public function addPartType() {
        $partTypeName = $_POST['partTypeName'];
    
        if (!$partTypeName) {
            echo "<p>Missing information</p>";
            $this->showAddPartTypeForm();
            return;
        } else if ($this->model->insertPartType($partTypeName)) {
            // echo "<p>Added part type: $partTypeName</p>";
            // Set a session variable for the success message
            $_SESSION['success_message'] = "Added part type: $partTypeName";
    
            header("Location: ?action=showPartTypeName");
            exit();
        } else {
            echo "<p>Could not add part type</p>";
            $this->showAddPartTypeForm();
        }
    }
    
//////////////////////////////////
// ADD COMPATIBILITY FORM //

        public function showAddCompatibilityForm() {
            include 'views/form_add_compatibility.php';
        }

        public function addCompatibility() {
            $compatibleWith = $_POST['compatibleWith'];

            if (!$compatibleWith) {
                echo "<p>Missing information</p>";
                $this->showAddCompatibilityForm();
                return;
            } else if ($this->model->insertCompatibility($compatibleWith)) {
                $_SESSION['success_message'] = "Added compatibility with : $compatibleWith";
                header("Location: ?action=showCompatibility");
                exit();

            } else {
                echo "<p>Could not add compatibility</p>";
            }
            $this->showCompatibility(); // Assuming you have a method to show the compatibility data
        }


/////////////////  ADD PART FORM ////////////////////


        public function addPart() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitPart'])) {
                // Retrieve form data
                $partName = isset($_POST['partName']) ? $_POST['partName'] : '';
                $partTypeNameID = isset($_POST['partTypeNameID']) ? $_POST['partTypeNameID'] : '';
                $brandID = isset($_POST['brandID']) ? $_POST['brandID'] : '';
                $price = isset($_POST['price']) ? $_POST['price'] : '';
                $compatibilityID = isset($_POST['compatibilityID']) ? $_POST['compatibilityID'] : '';
        
                // Validate form data (add validation logic if needed)
        
                // Call the model method to insert the part
                // if (empty([$partTypeNameID]) || empty([$compatibilityID])) {

                if (empty($partName) || empty($partTypeNameID) || empty($brandID) || empty($price) || empty($compatibilityID)) {
                    echo "<p>Missing information</p>";
                    $this->showAddPartForm();
                    return;
                } else 
                if ($this->model->insertPart($partName, $partTypeNameID, $brandID, $price, $compatibilityID)) {
                    $brandName = $this->model->getBrandNameById($brandID);
                    $partTypeName = $this->model->getPartTypeNameById($partTypeNameID);
                    $compatibleWith = $this->model->getCompatibilityById($compatibilityID);
                    // echo "<p>Added part: $partName</p>";
                    $_SESSION['success_message'] = "Added part: $partName , of Type: $partTypeName , of Brand: $brandName , at Price: $$price , Compatible with: $compatibleWith";
                    header("Location: ?action=showParts");
                    exit();
                } else {
                    echo "<p>Could not add part</p>";
                }
            }
        }
        
        public function showAddPartForm() {
            
            // Show the form and fetch necessary data for dropdowns
            $partTypeNames = $this->model->selectPartTypeName();
            $users = $this->model->selectUsers();
            $compatibleWith = $this->model->selectCompatibility();
        
            include 'views/form_add_part.php';
        }
        
        

        ////////////////// EDIT PART FORM //////////////////

        
        public function showEditPartForm($partID) {
            // Get part details for the specified partID
            $partDetails = $this->model->getPartDetails($partID);
            $partTypeNames = $this->model->selectPartTypeName();
            $users = $this->model->selectUsers();
            $compatibleWith = $this->model->selectCompatibility();

            // Include the edit part form
            include 'views/form_edit_part.php';
        }

        public function editPart() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitEditPart'])) {
                // Retrieve form data
                $partID = $_POST['partID'];
                $partName = $_POST['partName'];
                $brandID = $_POST['brandID'];
                $partTypeNameID = $_POST['partTypeNameID'];
                $price = $_POST['price'];
                $compatibilityID = $_POST['compatibilityID'];
        
                // Validate form data (add validation logic if needed)
        
                // Call the model method to update the part
                if (!$partID || !$partName || !$brandID || !$partTypeNameID || !$price || !$compatibilityID) {
                    echo "<p>Missing information</p>";
                    $this->showEditPartForm($partID);
                    return;
                } else if ($this->model->updatePart($partID, $partName, $brandID, $partTypeNameID, $price, $compatibilityID)) {
                    $brandName = $this->model->getBrandNameById($brandID);
                    $partTypeName = $this->model->getPartTypeNameById($partTypeNameID);
                    // echo "<p>Updated part: $partName, brand: $brandID</p>";
                    $_SESSION['success_message'] = "Updated part: $partName, Type: $partTypeName, Brand: $brandName, Price: $price " . "$";
                    header("Location: ?action=showParts");
                    exit();
                } else {
                    echo "<p>Could not update part</p>";
                }
            }

            // Redirect to the parts page or display a message as needed
            $this->showParts();
        }

//////////////////////////////////
        // delete part form
        public function confirmDeletePart($partID) {
            // Retrieve part details
            $partDetails = $this->model->getPartDetails($partID);
            $brandName = $this->model->getBrandNameById($partDetails['brandID']);
            $partTypeName = $this->model->getPartTypeNameById($partDetails['partTypeNameID']);
            $compatibleWith = $this->model->getCompatibilityById($partDetails['compatibilityID']);
        
            // Display confirmation message with part details
            echo "<form method='post' action=''>
                    <input type='hidden' name='partID' value='{$partID}'>
                    <div style='color: red; font-weight: bold; font-size: 18px'>
                    <p>Are you sure you want to delete this part?</p>
                    <p>Part ID: {$partID}</p>
                    <p>Part Name: {$partDetails['partName']}</p>
                    <p>Part Type: {$partTypeName}</p>
                    <p>Brand Name: {$brandName}</p>
                    <p>Price: $ {$partDetails['price']}</p>                    
                    <p>Compatibility: {$compatibleWith}</p>
                    </div>
                    <button type='submit' name='deletePart' value='{$partID}' id='delete_button'>Yes, Delete</button>
                    <button type='submit' name='cancelDeletePart'>Cancel</button>
                  </form>";
        }



        public function deletePart($partID) {
            $partDetails = $this->model->getPartDetails($partID);
            $brandName = $this->model->getBrandNameById($partDetails['brandID']);
            $partTypeName = $this->model->getPartTypeNameById($partDetails['partTypeNameID']);
            $compatibleWith = $this->model->getCompatibilityById($partDetails['compatibilityID']);
            if ($this->model->deletePart($partID)) {
                // echo "<p>Part deleted successfully</p>";
                $_SESSION['success_message'] = "Part: $partID , Name: {$partDetails['partName']} Brand: $brandName Type: $partTypeName, Price: $ {$partDetails['price']} Deleted Successfully";
                header("Location: ?action=showParts");
                exit();
            } else {
                echo "<p>Failed to delete part</p>";
            }
            $this->showAddPartForm();
            // You might want to redirect or show the updated parts list after deletion
            // $this->showParts();
        }
        
        










////////////////////////////////

}



    include_once 'controllers/connection.php';
    $connection2 = new connectionObject($host, $username, $password, $database);
    $controller = new Controller($connection2);
    
    if (isset($_POST['submit'])) {
        $controller->add();
    } else {
        $controller->handleActions();
    }







//////////////////////////////






?>
