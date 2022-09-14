--creation des tables

drop table if exists employees;
create table if not exists employees(
	emp_id serial ,
	emp_lastname varchar (50) not null,
	emp_firstname varchar (50) not null,
	emp_salary int,
	emp_hiredate date
	
	
);

--ajout des contraintes

alter table employees
	add primary key  (emp_id),
	add column emp_manager_id int null,
	add constraint fk_employees_manager foreign key (emp_manager_id) references employees(emp_id);






