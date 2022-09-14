		-- 1 Sélectionner le nom de toutes les villes

		SELECT city_name FROM cities ;	
		
		-- 2 Sélectionner l’identifiant et le nom de toutes les villes triées par nom de ville et par ordre alphabétique.	
		
		SELECT * FROM cities ORDER BY city_name ASC ;
		
		-- 3 Sélectionner toutes les villes avec le nom du pays associé à chaque ville. Trier la liste par code pays et par ordre
		--alphabétique inverse
		
		SELECT city_name,country_name,cities.country_code 
		FROM cities
		INNER JOIN countries ON cities.country_code = countries.country_code 
		ORDER BY country_code DESC ;
		
		-- 4 Sélectionner le code ISO et le nom de tous les pays avec le nombre de villes par pays. Les pays avec le moins de villes
		--apparaissent en 1er
		
		SELECT country_code,country_name FROM cities ,countries;