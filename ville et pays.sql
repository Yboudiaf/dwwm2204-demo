DROP TABLE cities;
DROP TABLE countries;


	CREATE TABLE cities (
	city_id INT,
	city_name CHAR(100)NOT NULL,
	country_code CHAR(2) NOT NULL,
	PRIMARY KEY(city_id)
	);
	
	
CREATE TABLE countries(
		country_code char(2),
		country_name VARCHAR(100),
		PRIMARY KEY(country_code)
	);
	
ALTER TABLE cities
ADD FOREIGN KEY (country_code) REFERENCES countries(country_code);
	
	

	
	
	