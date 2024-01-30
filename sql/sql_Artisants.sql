#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Contact
#------------------------------------------------------------

CREATE TABLE Contact(
        id      Int  Auto_increment  NOT NULL ,
        name    Varchar (50) NOT NULL ,
        message Text NOT NULL
	,CONSTRAINT Contact_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

