CREATE TABLE TAB_IDENTITY (
	ID INT IDENTITY(1,1) NOT NULL,
	DESCRITOR VARCHAR(20) NULL
)

SELECT * FROM TAB_IDENTITY

INSERT INTO TAB_IDENTITY (DESCRITOR)
VALUES ('CLIENTE X')
INSERT INTO TAB_IDENTITY (DESCRITOR)
VALUES ('CLIENTE Y')
INSERT INTO TAB_IDENTITY (DESCRITOR)
VALUES ('CLIENTE Z')
INSERT INTO TAB_IDENTITY (DESCRITOR)
VALUES ('CLIENTE W')

DELETE FROM TAB_IDENTITY WHERE ID = 1