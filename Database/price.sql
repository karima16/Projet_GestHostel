DELETE FROM `price`;
INSERT INTO `price`(`priceId`, `value`, `roomTypeId`, `seasonId`) 
VALUES 
(1,50,1,1), 
(2,100,1,2), 
(3,150,1,3), 
(4,100,2,1), 
(5,150,2,2), 
(6,200,2,3), 
(7,150,3,1), 
(8,200,3,2), 
(9,250,3,3);