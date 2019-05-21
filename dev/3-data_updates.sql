-- dummy data

USE concerts;

START TRANSACTION;

-- Beaver Productions = 2, Promoter role = 8
UPDATE users SET company_id = 2, role_id = 8 WHERE id = 2;
UPDATE orders SET started_by_user_id = 2 WHERE company_id = 2;
COMMIT;
