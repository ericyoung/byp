-- default data

use concerts;

START TRANSACTION;

DELETE FROM users;
DELETE FROM companies;
DELETE FROM roles;
DELETE FROM orders;
DELETE FROM deliveries;

INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(1,'unassigned',0);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(2,'admin',1);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(3,'accounts',1);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(4,'cmr',1);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(5,'dubbing',1);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(6,'graphics',1);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(7,'producer',1);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(8,'promoter-admin',0);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(9,'promoter-employee',0);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(10,'manager-admin',0);
INSERT INTO roles(`id`,`name`,`byp_role`) VALUES(11,'manager-employee',0);

INSERT INTO companies(`id`,`name`,`address1`,`city`,`state`,`zip`,`enabled`,`byp`,`phone`) VALUES(1,'Bill Young Productions','750 Park Two Dr','Sugar Land','TX','77478', 1, 1,'281-240-7400');

COMMIT;
