DELETE FROM `hostel`;
INSERT INTO `hostel` 
(`hostelName`,`hostelStars`,`hostelId`,`add_postCode`,`add_number`,`add_streetName`,`add_country`,`coo_lat`,`coo_long`,`phone`,`email`,`pool`,`valet`,`roomService`,`touristTaxes`,`isDeleted`,`forumId`) 
VALUES 
("Sit Amet Industries",3,1,"2395",301,"Ap #994-8950 Dui. Avenue","Andorra","-12.68569","-23.79695","00334 39 11 18 91","laoreet.lectus.quis@maurisMorbi.com","1","1","1",7,"0",1),("Tempor Lorem Eget Corp.",5,2,"A71 5NG",310,"898-7999 Elementum, St.","Tanzania","-89.31681","172.477","00338 62 47 37 89","dictum@malesuadafamesac.net","1","1","1",5,"0",2),
("Tortor At Risus PC",5,3,"56873",552,"Ap #848-259 Hendrerit Rd.","Yemen","9.35313","160.06037","00336 74 62 36 08","facilisis.Suspendisse.commodo@luctus.org","1","1","1",7,"0",3),("Cursus Vestibulum Institute",5,4,"273046",589,"637-1479 Et Avenue","Tunisia","41.91041","-27.13483","00339 42 22 76 87","venenatis.lacus.Etiam@nonummyipsum.com","1","1","1",7,"0",4),
("Auctor Industries",2,5,"76456",621,"617 Morbi St.","Thailand","-89.90333","30.7262","00335 74 43 10 70","Class@nascetur.ca","1","1","1",5,"0",5),
("Parturient Company",2,6,"38737",124,"Ap #580-9472 Quis, Road","Curaçao","-39.19013","23.39703","00339 51 05 51 08","pede.Cum@nullaCraseu.org","1","1","1",7,"0",6),
("Vulputate Ullamcorper Magna Limited",3,7,"579773",639,"P.O. Box 943, 237 Proin St.","Tuvalu","17.55356","84.69438","00334 77 26 55 44","natoque@consequat.edu","1","1","1",6,"0",7),
("Nulla Dignissim Maecenas Limited",5,8,"484161",357,"5381 Imperdiet Av.","Syria","52.89302","-51.65803","00338 07 19 67 51","Aenean@egettinciduntdui.com","1","1","1",10,"0",8),
("Sed Associates",4,9,"61205",582,"Ap #321-7874 Semper. St.","Botswana","-62.37058","147.41574","00339 89 82 40 41","ante.dictum.cursus@Integerid.edu","1","1","1",5,"0",9),
("Vehicula Et Rutrum Incorporated",5,10,"15-391",45,"494-3913 Augue. Av.","Fiji","-48.61424","-177.44469","00336 56 20 64 34","sit.amet.dapibus@Cras.com","1","1","1",8,"0",10);

DELETE FROM `role`;
INSERT INTO `role`
(`roleName`)
VALUES
(`Admin`),
(`Client`)

DELETE FROM `user`;
INSERT INTO `user`
( `firstName`, `lastName`,  `email`,  `country`, `phone`, `password`, `roleId`)
VALUES
(`Balthazar`, `Picsou`, `b.picsou@gmail.com`, `CanardVille`, `04/123456`, 'Test1234=', (SELECT `roleId` FROM `role` WHERE `roleName` LIKE `Admin`))
(`Riri`, `Duck`, `riri.duck@gmail.com`, `CanardVille`, `04/123456`, 'Test1234=', (SELECT `roleId` FROM `role` WHERE `roleName` LIKE `Client`))



DELETE FROM `message`;
INSERT INTO `message` 
(`messageContent`,`postDate`,`messageId`,`userId`,`subjectId`,`isActive`) 
VALUES 
("Lorem ipsum dolor","21/10/18",1,1,1,"1"),
("Lorem ipsum dolor sit amet, consectetuer","28/09/19",2,2,2,"1"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","10/03/20",3,3,3,"1"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed","17/03/19",4,4,4,"1"),
("Lorem","02/12/18",5,5,5,"1"),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur","05/05/20",6,6,6,"1"),
("Lorem ipsum dolor sit amet,","21/08/19",7,7,7,"1"),("Lorem ipsum","21/06/20",8,8,8,"1"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","08/10/18",9,9,9,"0"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","06/01/20",10,10,10,"0");

DELETE FROM `picture`;
INSERT INTO `picture` (`pictureId`,`roomId`,`picturePath`) 
VALUES 
(1,1,"https://images.pexels.com/photos/1838554/pexels-photo-1838554.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(2,1,"https://images.pexels.com/photos/275845/pexels-photo-275845.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(3,2,"https://images.pexels.com/photos/2507010/pexels-photo-2507010.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(4,2,"https://images.pexels.com/photos/2467285/pexels-photo-2467285.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(5,2,"https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(6,2,"https://images.pexels.com/photos/2736388/pexels-photo-2736388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(7,3,"https://images.pexels.com/photos/271619/pexels-photo-271619.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(8,3,"https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(9,4,"https://images.pexels.com/photos/2029719/pexels-photo-2029719.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(10,5,"https://images.pexels.com/photos/210604/pexels-photo-210604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(11,5,"https://images.pexels.com/photos/2507016/pexels-photo-2507016.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(12,6,"https://images.pexels.com/photos/2775320/pexels-photo-2775320.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(13,7,"https://images.pexels.com/photos/237393/pexels-photo-237393.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(14,7,"https://images.pexels.com/photos/2725675/pexels-photo-2725675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(15,8,"https://images.pexels.com/photos/210604/pexels-photo-210604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(16,8,"https://images.pexels.com/photos/2290753/pexels-photo-2290753.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(17,8,"https://images.pexels.com/photos/1457847/pexels-photo-1457847.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(18,9,"https://images.pexels.com/photos/2134224/pexels-photo-2134224.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(19,9,"https://images.pexels.com/photos/1028379/pexels-photo-1028379.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(20,9,"https://images.pexels.com/photos/280121/pexels-photo-280121.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(21,9,"https://images.pexels.com/photos/189293/pexels-photo-189293.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(22,10,"https://images.pexels.com/photos/545012/pexels-photo-545012.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(23,10,"https://images.pexels.com/photos/279652/pexels-photo-279652.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(24,10,"https://images.pexels.com/photos/1030834/pexels-photo-1030834.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(25,10,"https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
