CREATE SCHEMA coronaStat;
USE coronaStat;

--TABLE----------------------------------------------------------------------------------------
CREATE TABLE Users (  
  user_id INT NOT NULL AUTO_INCREMENT,
  password varchar(255) NOT NULL,
  name varchar(255) COLLATE utf8_unicode_ci NOT NULL,   
  PRIMARY KEY (user_id)
);

CREATE TABLE Regions (
  region_id INT NOT NULL AUTO_INCREMENT,    
  intitule varchar(255) COLLATE utf8_unicode_ci NOT NULL,    
  PRIMARY KEY (region_id)  
);

CREATE TABLE Statistiques (  
  statistique_id INT NOT NULL AUTO_INCREMENT,
  region_id INT NOT NULL,    
  analyse INT NOT NULL,
  cas INT NOT NULL,
  grave INT NOT NULL,
  gueris INT NOT NULL,
  deces INT NOT NULL,
  dateStat Date NOT NULL,
  PRIMARY KEY (statistique_id)
);
--DATA------------------------------------------------------------------------
INSERT INTO Users(name, password) VALUES 
  ('admin', 'admin')  
;

INSERT INTO Regions(intitule) VALUES 
  ('Analamanga'),
  ('Vakinakaratra'),
  ('Alaotra')
;

INSERT INTO Statistiques(region_id, analyse, cas, gueris, grave, deces, dateStat) VALUES 
  (1, 10, 1, 11, 2, 1, NOW()),
  (2, 10, 1, 11, 2, 1, NOW()),
  (3, 10, 1, 11, 2, 1, NOW())
;
--SELECTOR--------------------------------------------------------------------------
CREATE OR REPLACE VIEW view_statistiques AS SELECT 
	Regions.region_id, Regions.intitule,
	Statistiques.analyse,Statistiques.cas, Statistiques.gueris, 
	Statistiques.grave, Statistiques.deces, 
	Statistiques.dateStat
	FROM Statistiques
	JOIN Regions ON Regions.region_id = Statistiques.region_id  
;

CREATE OR REPLACE VIEW view_sumStatistiques AS SELECT 
	dateStat, SUM(analyse) AS total_analyse, SUM(cas) AS total_cas, 
	SUM(gueris) AS total_gueris, SUM(grave) AS total_grave,
	SUM(deces) AS total_deces	
	FROM view_statistiques	
	GROUP BY dateStat
;

CREATE OR REPLACE VIEW view_sumStatistiquesNow AS SELECT 
	SUM(total_analyse) AS total_analyse, 
	SUM(total_cas) + SUM(total_grave) - SUM(total_gueris) AS traite, 
	SUM(total_gueris) AS total_gueris, SUM(total_grave) AS total_grave,
	SUM(total_deces) AS total_deces	
	FROM view_sumStatistiques		
;


--FUNCTION------------------------------------------------------------------------------



