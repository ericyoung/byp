CREATE DATABASE IF NOT EXISTS concerts;
USE concerts;

START TRANSACTION;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS companies;
DROP TABLE IF EXISTS roles;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS deliveries;
DROP TABLE IF EXISTS recipients;
DROP TABLE IF EXISTS ci_sessions;

CREATE TABLE IF NOT EXISTS roles(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(100) NOT NULL,
   byp_role BOOLEAN NOT NULL DEFAULT 0,
   enabled BOOLEAN NOT NULL DEFAULT 1,
   PRIMARY KEY ( id )
);
CREATE INDEX role_name on roles(`name`);
CREATE INDEX role_enabled on roles(`enabled`);


CREATE TABLE IF NOT EXISTS companies(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255) NOT NULL,
   address1 VARCHAR(255),
   address2 VARCHAR(200),
   city VARCHAR(100),
   state VARCHAR(30),
   zip VARCHAR(20),
   phone VARCHAR(20),
   enabled BOOLEAN NOT NULL DEFAULT 1,
   byp BOOLEAN NOT NULL DEFAULT 0,
   date_created DATETIME NOT NULL DEFAULT NOW(),
   PRIMARY KEY ( id )
);
CREATE INDEX company_name on companies(`name`);
CREATE INDEX company_enabled on companies(`enabled`);

CREATE TABLE IF NOT EXISTS users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255) NOT NULL,
   password_hash VARCHAR(255) NOT NULL,
   email VARCHAR(100) NOT NULL,
   company_id INT NOT NULL DEFAULT 0,
   address1 VARCHAR(255),
   address2 VARCHAR(255),
   city VARCHAR(30),
   state VARCHAR(2),
   zip VARCHAR(20),
   phone VARCHAR(50),
   role_id INT NOT NULL DEFAULT 1,
   enabled BOOLEAN NOT NULL DEFAULT 1, /* disallows logins */
   approved BOOLEAN NOT NULL DEFAULT 0, /* only allows profile updates */
   byp BOOLEAN NOT NULL DEFAULT 0,
   last_active_session_id VARCHAR(128), /* used for forcing user logout */
   reset_token VARCHAR(255), /* if not null, allow user to reset password */
   notes VARCHAR(255),
   date_created DATETIME NOT NULL DEFAULT NOW(),
   PRIMARY KEY ( id )
);
CREATE INDEX user_company_id on users(`company_id`);
CREATE INDEX user_role on users(`role_id`);
CREATE UNIQUE INDEX unique_email ON users(`email`);


CREATE TABLE IF NOT EXISTS orders(
   id INT NOT NULL AUTO_INCREMENT,
   company_id INT NOT NULL,
   started_by_user_id INT NOT NULL,
   order_type ENUM('av', 'art') NOT NULL DEFAULT 'av',
   save_status ENUM('draft', 'publish') NOT NULL DEFAULT 'draft',
   promoter_contact VARCHAR(255),
   promoter_phone VARCHAR(20),
   promoter_phone_ext VARCHAR(10),
   promoter_phone_alt VARCHAR(20),
   promoter_company VARCHAR(255),
   promoter_email VARCHAR(100),
   radio_received_by DATE,
   tv_received_by DATE,
   art_received_by DATE,
   headliner VARCHAR(255),
   special_guest VARCHAR(255),
   city_market VARCHAR(255),
   venue VARCHAR(255),
   day_of_show VARCHAR(10),
   date_of_show DATE,
   time_of_show VARCHAR(10),
   outro TEXT,
   intro TEXT,
   produced_by TEXT,
   welcomes_presents TEXT,
   radio_ids VARCHAR(255),
   tv_ids VARCHAR(255),
   id_versions_only BOOLEAN,
   required_logos TEXT,
   revision BOOLEAN,
   call_to_play_radio BOOLEAN,
   radio_requires_approval BOOLEAN,
   rush_order BOOLEAN,
   include_the_in_venue_name BOOLEAN,
   tickets_on_sale_day VARCHAR(10),
   tickets_on_sale_date DATE,
   tickets_on_sale_time VARCHAR(10),
   include_reserve_seats BOOLEAN,
   ticket_information TEXT,
   radio_spots TEXT,
   tv_spots TEXT,
   ship_radio_via_pdq_to_email VARCHAR(100),
   comcast_ad_delivery VARCHAR(255),
   special_instructions TEXT,
   ad_local_info TEXT,
   ad_template_vertical BOOLEAN,
   ad_template_horizontal BOOLEAN,
   ad_template_both BOOLEAN,
   ad_static_web_banner_package BOOLEAN,
   ad_social_media_package BOOLEAN,
   ad_premium_package BOOLEAN,
   ad_custom_sizes TEXT,
   ad_custom_static_banners TEXT,
   ad_custom_instructions TEXT,
   ad_animated_gif_web_banner_package BOOLEAN,
   ad_animated_html5_web_banner_package BOOLEAN,
   ad_animated_custom_sizes TEXT,
   ad_animated_instructions TEXT,
   shipping_fedex_number VARCHAR(255),
   shipping_sheet TEXT,
   enabled BOOLEAN NOT NULL DEFAULT 1,
   published BOOLEAN NOT NULL DEFAULT 0,
   publishable BOOLEAN NOT NULL DEFAULT 0,
   date_created DATETIME NOT NULL DEFAULT NOW(),
   date_updated DATETIME,
   note TEXT,
   PRIMARY KEY ( id )
);
CREATE INDEX order_company_id on orders(`company_id`);
CREATE INDEX order_started_by_user_id on orders(`started_by_user_id`);
CREATE INDEX order_headliner on orders(`headliner`);
CREATE INDEX order_date_created on orders(`date_created`);
CREATE INDEX order_order_type on orders(`order_type`);
CREATE INDEX order_rush_order on orders(`rush_order`);
CREATE INDEX order_published on orders(`published`);
CREATE INDEX order_date_of_show on orders(`date_of_show`);
CREATE INDEX order_save_status on orders(`save_status`);



CREATE TABLE IF NOT EXISTS pdqs(
  id INT NOT NULL AUTO_INCREMENT,
  order_id INT NOT NULL,
  pdq_number VARCHAR(20) NOT NULL,
  enabled BOOLEAN NOT NULL DEFAULT 1,
  date_created DATETIME NOT NULL DEFAULT NOW(),
  date_updated DATETIME,
  note VARCHAR(255),
  ready_to_traffic BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY ( id )
);
CREATE INDEX pdq_order_id on pdqs(`order_id`);
CREATE INDEX pdq_date_created on pdqs(`date_created`);



CREATE TABLE IF NOT EXISTS deliveries(
   id INT NOT NULL AUTO_INCREMENT,
   pdq_id INT NOT NULL,
   delivery_type ENUM('approval', 'traffic') NOT NULL,
   send_to_recipient_type VARCHAR(10) NOT NULL,
   send_to_email VARCHAR(255) NOT NULL,
   send_to_name VARCHAR(255),
   note VARCHAR(255),
   sent_from_user_id INT NOT NULL,
   preview_radio BOOLEAN NOT NULL DEFAULT 0,
   approve_radio BOOLEAN NOT NULL DEFAULT 0,
   traffic_radio BOOLEAN NOT NULL DEFAULT 0,
   download_radio BOOLEAN NOT NULL DEFAULT 0,
   preview_tv BOOLEAN NOT NULL DEFAULT 0,
   approve_tv BOOLEAN NOT NULL DEFAULT 0,
   traffic_tv BOOLEAN NOT NULL DEFAULT 0,
   download_tv BOOLEAN NOT NULL DEFAULT 0,
   preview_print BOOLEAN NOT NULL DEFAULT 0,
   approve_print BOOLEAN NOT NULL DEFAULT 0,
   traffic_print BOOLEAN NOT NULL DEFAULT 0,
   download_print BOOLEAN NOT NULL DEFAULT 0,
   enabled BOOLEAN NOT NULL DEFAULT 1,
   date_created DATETIME NOT NULL DEFAULT NOW(),
   date_accessed DATETIME,
   date_approved DATETIME,
   date_downloaded DATETIME,
   PRIMARY KEY ( id )
);
CREATE INDEX delivery_pdq_id on deliveries(`pdq_id`);
CREATE INDEX delivery_send_to_email on deliveries(`send_to_email`);
CREATE INDEX delivery_sent_from_user_id on deliveries(`sent_from_user_id`);


CREATE TABLE IF NOT EXISTS recipients(
   id INT NOT NULL AUTO_INCREMENT,
   company_id INT NOT NULL,
   recipient_type ENUM('individual', 'station') NOT NULL,
   name VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   address1 VARCHAR(255),
   address2 VARCHAR(200),
   city VARCHAR(100),
   state VARCHAR(30),
   zip VARCHAR(20),
   phone VARCHAR(15),
   phone_ext INT,
   enabled BOOLEAN NOT NULL DEFAULT 1,
   date_created DATETIME NOT NULL DEFAULT NOW(),
   PRIMARY KEY ( id )
);
CREATE INDEX recipient_company_id on recipients(`company_id`);
CREATE INDEX recipient_enabled on recipients(`enabled`);


CREATE TABLE IF NOT EXISTS ci_sessions (
  id varchar(128) NOT NULL,
  ip_address varchar(45) NOT NULL,
  timestamp int(10) unsigned DEFAULT 0 NOT NULL,
  data blob NOT NULL,
  KEY ci_sessions_timestamp (`timestamp`)
);

ALTER TABLE ci_sessions ADD PRIMARY KEY (id);

COMMIT;
