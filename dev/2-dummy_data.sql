-- test data

USE concerts;

START TRANSACTION;

INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(2,'Beaver Productions','123 Mary','New Orleans','LA','70012', 1, 0,'123-123-4567');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(3,'Cellar Door','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(4,'Test Company 1','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(5,'Test Company 2','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(6,'Test Company 3','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(7,'Test Company 4','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(8,'Test Company 5','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(9,'Test Company 6','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(10,'Test Company 7','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(11,'Test Company 8','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');
INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(12,'Test Company 9','456 5th Ave','New York','NY','22222', 1, 0,'789-123-3456');


INSERT INTO orders(`id`,`company_id`,`started_by_user_id`,`headliner`,`special_guest`,`city_market`,`venue`,`date_of_show`) VALUES(1,2,1,'Emmitt Fenn','Com Truise','Austin, TX','Bass Concert Hall','2019-06-01 20:00:00');
INSERT INTO orders(`id`,`company_id`,`started_by_user_id`,`headliner`,`special_guest`,`city_market`,`venue`,`date_of_show`) VALUES(2,2,1,'Pink Floyd Laser Light Spectacular',NULL,'Austin, TX','Bass Concert Hall','2019-06-02 20:00:00');
INSERT INTO orders(`id`,`company_id`,`started_by_user_id`,`headliner`,`special_guest`,`city_market`,`venue`,`date_of_show`) VALUES(3,2,1,'Poolside','Emmitt Fenn','Austin, TX','Bass Concert Hall','2019-06-03 20:00:00');
INSERT INTO orders(`id`,`company_id`,`started_by_user_id`,`headliner`,`special_guest`,`city_market`,`venue`,`date_of_show`) VALUES(4,2,1,'Dinosaur Jr','Tackhead','Austin, TX','Bass Concert Hall','2019-06-04 20:00:00');
INSERT INTO orders(`id`,`company_id`,`started_by_user_id`,`headliner`,`special_guest`,`city_market`,`venue`,`date_of_show`) VALUES(5,2,1,'Rob Zombie','Marilyn Manson','Austin, TX','Bass Concert Hall','2019-06-05 20:00:00');

COMMIT;
