
drop table if exists cars cascade;
drop table if exists brands cascade;
drop table if exists cars_owners cascade;
drop table if exists owners cascade;
--table voitures
create table cars(
	cars_id serial,
	cars_name varchar(100)not null
	
);

alter table cars
	add primary key (cars_id),
	add column cars_owner_id int null,
	add constraint fk_cars_owner_id foreign key (cars_owner_id) references cars(cars_id),
	add column brand_id int not null,
	add constraint fk_brand_id foreign key (brand_id) references cars(cars_id)	
	
;
	
--table proprietaire
create table owners(
	owner_id int,
	owner_lastname varchar(50),
	owner_firstname varchar(50)	
);

alter table owners
	add primary key(owner_id)
;
	
--table marque	
create table brands(
	brand_id serial,
	brand_name varchar(50),
	brand_slogan varchar(255)

);

alter table brands 
	add primary key (brand_id)
;
	
--table clef etrangere voiture_proprietaire
create table cars_owners(
	cars_owners_id int,
	cars_id int,
	cars_registration char(9)unique

);

alter table cars_owners
	add primary key (cars_owners_id,cars_id),
	add constraint fk_cars_id foreign key (cars_id) references cars(cars_id),
	add constraint fk_cars_owners_id foreign key (cars_owners_id)references owners(owners_id)
;
	