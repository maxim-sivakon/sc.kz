CREATE TABLE b_biconnector_key
(
	ID INT AUTO_INCREMENT NOT NULL,
	DATE_CREATE DATETIME NOT NULL,
	CREATED_BY INT NOT NULL,
	TIMESTAMP_X TIMESTAMP NOT NULL,
	ACCESS_KEY VARCHAR(64) NOT NULL,
	CONNECTION VARCHAR(50) NOT NULL,
	ACTIVE CHAR(1) NOT NULL DEFAULT 'Y',
	APP_ID INT NULL,
	SERVICE_ID VARCHAR(64) NULL,
	LAST_ACTIVITY_DATE DATETIME NULL,
	INDEX ix_b_biconnector_key(ACCESS_KEY),
	INDEX ix_b_biconnector_key_app(APP_ID),
	PRIMARY KEY pk_b_biconnector_key(ID)
);

CREATE TABLE b_biconnector_key_user
(
	ID INT AUTO_INCREMENT NOT NULL,
	TIMESTAMP_X TIMESTAMP NOT NULL,
	CREATED_BY INT NOT NULL,
	KEY_ID INT NOT NULL,
	USER_ID VARCHAR(50) NOT NULL,
	INDEX ix_b_biconnector_key_user(USER_ID, KEY_ID),
	INDEX ix_b_biconnector_key_user_1(KEY_ID, USER_ID),
	PRIMARY KEY pk_b_biconnector_key_user(ID)
);

CREATE TABLE b_biconnector_dashboard
(
	ID INT AUTO_INCREMENT NOT NULL,
	DATE_CREATE DATETIME NOT NULL,
	TIMESTAMP_X TIMESTAMP NOT NULL,
	CREATED_BY INT NOT NULL,
	LAST_VIEW_BY INT DEFAULT NULL,
	DATE_LAST_VIEW DATETIME DEFAULT NULL,
	NAME VARCHAR(50) NOT NULL,
	URL VARCHAR(1024) NOT NULL,
	PRIMARY KEY pk_b_biconnector_dashboard(ID)
);

CREATE TABLE b_biconnector_dashboard_user
(
	ID INT AUTO_INCREMENT NOT NULL,
	TIMESTAMP_X TIMESTAMP NOT NULL,
	CREATED_BY INT NOT NULL,
	DASHBOARD_ID INT NOT NULL,
	USER_ID VARCHAR(50) NOT NULL,
	INDEX ix_b_biconnector_dashboard_user(USER_ID, DASHBOARD_ID),
	INDEX ix_b_biconnector_dashboard_user_1(DASHBOARD_ID, USER_ID),
	PRIMARY KEY pk_b_biconnector_dashboard_user(ID)
);

CREATE TABLE b_biconnector_dictionary_cache
(
	DICTIONARY_ID INT NOT NULL,
	UPDATE_DATE DATETIME NOT NULL,
	TTL INT NOT NULL,
	PRIMARY KEY pk_b_biconnector_dictionary_cache(DICTIONARY_ID)
);

CREATE TABLE b_biconnector_dictionary_data
(
	DICTIONARY_ID INT NOT NULL,
	VALUE_ID INT NOT NULL,
	VALUE_STR VARCHAR(500),
	PRIMARY KEY pk_b_biconnector_dictionary_data(DICTIONARY_ID, VALUE_ID)
);

CREATE TABLE b_biconnector_log
(
	ID INT AUTO_INCREMENT NOT NULL,
	TIMESTAMP_X TIMESTAMP NOT NULL,
	KEY_ID INT NOT NULL,
	SERVICE_ID VARCHAR(150) NOT NULL,
	SOURCE_ID VARCHAR(150) NOT NULL,
	FIELDS text,
	FILTERS text,
	INPUT text,
	REQUEST_METHOD VARCHAR(15),
	REQUEST_URI VARCHAR(2000),
	ROW_NUM INT,
	DATA_SIZE INT,
	REAL_TIME DOUBLE,
	IS_OVER_LIMIT CHAR(1) DEFAULT 'N',
	INDEX ix_b_biconnector_log_time(TIMESTAMP_X, ROW_NUM),
	INDEX ix_b_biconnector_log_key(KEY_ID, TIMESTAMP_X),
	PRIMARY KEY pk_b_biconnector_log(ID)
);

CREATE TABLE b_biconnector_superset_dashboard
(
	ID INT AUTO_INCREMENT NOT NULL,
	EXTERNAL_ID INT NULL,
	STATUS CHAR(1) NOT NULL DEFAULT 'R',
	TITLE VARCHAR(128) NULL,
	DATE_FILTER_START DATE NULL,
	DATE_FILTER_END DATE NULL,
	TYPE VARCHAR(50) NOT NULL,
	APP_ID VARCHAR(128) NULL,
	SOURCE_ID INT NULL,
	DATE_CREATE DATETIME NOT NULL,
	DATE_MODIFY DATETIME NOT NULL,
	FILTER_PERIOD VARCHAR(50) NULL,
	CREATED_BY_ID INT NULL,
	OWNER_ID INT NULL,
	INCLUDE_LAST_FILTER_DATE CHAR(1) DEFAULT NULL,
	PRIMARY KEY pk_b_biconnector_superset_dashboard(ID),
	INDEX ix_b_biconnector_superset_dashboard_app_id(APP_ID),
	INDEX ix_b_biconnector_superset_dashboard_external_id(EXTERNAL_ID),
	INDEX ix_b_biconnector_superset_dashboard_source_id(SOURCE_ID)
);

CREATE TABLE b_biconnector_superset_user
(
	ID INT AUTO_INCREMENT NOT NULL,
	USER_ID INT NOT NULL,
	CLIENT_ID VARCHAR (32) NOT NULL,
	PERMISSION_HASH VARCHAR (32) NULL,
	PRIMARY KEY pk_b_biconnector_superset_user(ID)
);

CREATE TABLE b_biconnector_superset_tag
(
	ID INT AUTO_INCREMENT NOT NULL,
	USER_ID INT NOT NULL,
	TITLE varchar(255) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE INDEX IX_BICONNECTOR_USER_TAG (USER_ID, TITLE)
);

CREATE TABLE b_biconnector_superset_dashboard_tag
(
	ID INT AUTO_INCREMENT NOT NULL,
	DASHBOARD_ID INT NOT NULL,
	TAG_ID INT NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE INDEX IX_BICONNECTOR_DASHBOARD_TAG (TAG_ID, DASHBOARD_ID)
);

CREATE TABLE IF NOT EXISTS b_biconnector_role
(
	ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	NAME VARCHAR(250) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS b_biconnector_role_relation
(
	ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	ROLE_ID INT(10) UNSIGNED NOT NULL,
	RELATION VARCHAR(8) NOT NULL DEFAULT '',
	PRIMARY KEY (ID),
	INDEX ROLE_ID (ROLE_ID),
	INDEX RELATION (RELATION)
);

CREATE TABLE IF NOT EXISTS b_biconnector_permission
(
	ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	ROLE_ID INT(10) UNSIGNED NOT NULL,
	PERMISSION_ID VARCHAR(32) NOT NULL DEFAULT '0',
	VALUE INT(10) NOT NULL DEFAULT '0',
	PRIMARY KEY (ID),
	INDEX ROLE_ID (ROLE_ID),
	INDEX PERMISSION_ID (PERMISSION_ID)
);

CREATE TABLE IF NOT EXISTS b_biconnector_superset_scope
(
	ID INT AUTO_INCREMENT NOT NULL,
	DASHBOARD_ID INT NOT NULL,
	SCOPE_CODE VARCHAR(255) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE INDEX IX_BICONNECTOR_DASHBOARD_SCOPE (SCOPE_CODE, DASHBOARD_ID)
);