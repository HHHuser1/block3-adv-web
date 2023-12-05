


SELECT * FROM parts	NATURAL JOIN brandName NATURAL JOIN partType NATURAL JOIN compatibility NATURAL JOIN systemBuildPartTable;

SELECT * FROM parts	NATURAL JOIN brandName NATURAL JOIN partType NATURAL JOIN compatibility NATURAL JOIN systemBuildPartTable WHERE parts.partID = 2;

SELECT * FROM parts	NATURAL JOIN brandName NATURAL JOIN partType NATURAL JOIN compatibility NATURAL JOIN systemBuildPartTable NATURAL JOIN systemBuild WHERE systemBuild.systemBuildID = 7;