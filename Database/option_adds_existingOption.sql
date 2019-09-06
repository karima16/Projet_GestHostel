DELETE FROM `option`;
INSERT INTO `option`(`optionId`, `optionName`, `optionPrice`, `isPossible`) 
VALUES 
(1,"WIFI",10,1), 
(2,"breakfast",20,1),
(3,"petsAllowed",15,1),
(4,"airConditionner",15,1),
(5,"TV",15,1);

DELETE FROM `existanceoptionroomtype`;
INSERT INTO `existanceoptionroomtype`(`optionId`, `roomTypeId`) 
VALUES 
(1,1),
(1,2),
(1,3),
(2,3),
(3,3),
(3,2),
(4,1),
(4,2),
(4,3),
(5,3),
(5,2),
(5,1);

DELETE FROM `adds`;
INSERT INTO `adds`
(`optionId`, `reservationId`)
VALUES 
(1,1),
(1,10),
(2,9),
(3,5),
(4,8),
(1,7),
(1,9);