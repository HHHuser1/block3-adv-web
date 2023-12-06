
CREATE TABLE `computer_parts`.`brandName` (`brandID` INT NOT NULL AUTO_INCREMENT , `brandName` VARCHAR(256) NOT NULL , PRIMARY KEY (`brandID`)) ENGINE = InnoDB;


CREATE TABLE `computer_parts`.`partType` (`partTypeNameID` INT NOT NULL AUTO_INCREMENT , `partTypeName` VARCHAR(256) NOT NULL , PRIMARY KEY (`partTypeNameID`)) ENGINE = InnoDB;


CREATE TABLE `computer_parts`.`parts` (`partID` INT NOT NULL AUTO_INCREMENT , `partName` VARCHAR(256) NOT NULL , `partTypeNameID` INT NOT NULL , `brandID` INT NOT NULL , `price` INT NOT NULL , `compatibilityID` INT NOT NULL , PRIMARY KEY (`partID`)) ENGINE = InnoDB;


CREATE TABLE `computer_parts`.`compatibility` (`compatibilityID` INT NOT NULL AUTO_INCREMENT , `compatibleWith` VARCHAR(256) NOT NULL , PRIMARY KEY (`compatibilityID`)) ENGINE = InnoDB;


CREATE TABLE `computer_parts`.`systemBuild` (`systemBuildID` INT NOT NULL AUTO_INCREMENT , `systemBuildName` VARCHAR(256) NOT NULL , PRIMARY KEY (`systemBuildID`)) ENGINE = InnoDB;


CREATE TABLE `computer_parts`.`systemBuildPartTable` (`systemBuildPartID` INT NOT NULL AUTO_INCREMENT , `systemBuildID` INT NOT NULL , `partID` INT NOT NULL , PRIMARY KEY (`systemBuildPartID`)) ENGINE = InnoDB;



ALTER TABLE `parts` ADD CONSTRAINT `partTypeNameID` FOREIGN KEY (`partTypeNameID`) REFERENCES `partType`(`partTypeNameID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `parts` ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `brandName`(`brandID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `parts` ADD CONSTRAINT `compatibilityID` FOREIGN KEY (`compatibilityID`) REFERENCES `compatibility`(`compatibilityID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `systemBuildPartTable` ADD CONSTRAINT `systemBuildID` FOREIGN KEY (`systemBuildID`) REFERENCES `systemBuild`(`systemBuildID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `systemBuildPartTable` ADD CONSTRAINT `partID` FOREIGN KEY (`partID`) REFERENCES `parts`(`partID`) ON DELETE RESTRICT ON UPDATE RESTRICT;




INSERT INTO `brandName` (`brandID`, `brandName`) VALUES (NULL, 'Intel'), (NULL, 'AMD'), (NULL, 'NVIDIA'), (NULL, 'Corsair'), (NULL, 'Kingston'), (NULL, 'ASUS'), (NULL, 'Gigabyte'), (NULL, 'Samsung'), (NULL, 'WesternDigital'), (NULL, 'Logitech')

INSERT INTO `compatibility` (`compatibilityID`, `compatibleWith`) VALUES (NULL, 'INTEL'), (NULL, 'AMD')

INSERT INTO `partType` (`partTypeNameID`, `partTypeName`) VALUES (NULL, 'CPU processor'), (NULL, 'GPU graphics'), (NULL, 'RAM'), (NULL, 'storage'), (NULL, 'motherboard'), (NULL, 'power supply'), (NULL, 'case')

INSERT INTO `parts` (`partID`, `partName`, `partTypeNameID`, `brandID`, `price`, `compatibilityID`) VALUES (NULL, 'Intel Core i9-12900K', '1', '1', '600', '1'), (NULL, 'AMD Ryzen 9 6900X', '1', '2', '500', '2'), (NULL, 'NVIDIA RTX 3090', '2', '3', '600', '1'), (NULL, 'Corsair Vengeance RGB', '3', '4', '400', '1'), (NULL, 'Kingston HyperX Fury', '3', '5', '400', '2'), (NULL, 'ASUS ROG Strix Z590-E', '5', '6', '400', '1'), (NULL, 'Gigabyte B550 AORUS Pro', '5', '7', '300', '2'), (NULL, 'Samsung 970 EVO 1TB NVMe', '4', '8', '300', '1'), (NULL, 'Corsair RM850x', '6', '4', '300', '1'), (NULL, 'Corsair 4000D Airflow\r\n', '7', '4', '300', '1')

INSERT INTO `systemBuild` (`systemBuildID`, `systemBuildName`) VALUES (NULL, 'Budget PC'), (NULL, 'Gaming PC'), (NULL, 'Productivity PC'), (NULL, 'Home Theater PC')

INSERT INTO `systemBuildPartTable` (`systemBuildPartID`, `systemBuildID`, `partID`) VALUES (NULL, '6', '2'), (NULL, '6', '5'), (NULL, '7', '1'), (NULL, '7', '4'), (NULL, '7', '3'), (NULL, '7', '8'), (NULL, '8', '7'), (NULL, '8', '2'), (NULL, '8', '10'), (NULL, '9', '1'), (NULL, '9', '7')


-- DIFFERENT QUERIES 

SELECT * FROM parts	NATURAL JOIN brandName NATURAL JOIN partType NATURAL JOIN compatibility NATURAL JOIN systemBuildPartTable;

SELECT * FROM parts	NATURAL JOIN brandName NATURAL JOIN partType NATURAL JOIN compatibility NATURAL JOIN systemBuildPartTable WHERE parts.partID = 2;

SELECT * FROM parts	NATURAL JOIN brandName NATURAL JOIN partType NATURAL JOIN compatibility NATURAL JOIN systemBuildPartTable NATURAL JOIN systemBuild WHERE systemBuild.systemBuildID = 7;






