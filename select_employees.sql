select * 
from employees;

select emp_lastname,emp_firstname,emp_salary 
from employees 
order by  emp_hiredate desc;

--4 selectionner les employees sans manager
select * 
from employees 
where emp_manager_id is null;

--5 Selectionner le prenom et nom de tous les managers avec,pour chacun ,le nombre de leur surbordonnes.
--les managers avec le moins de subordonnes apparaissent en 1er.

select M1.emp_lastname,M1.emp_firstname,count (E1.emp_id)as nb_sub
from employees as M1
inner join employees as E1 on M1.emp_id = E1.emp_manager_id
group by M1.emp_id
order by nb_sub;

select *
from employees
where emp_manager_id = 1;

--6 Sélectionner le nom de tous les managers avec, pour chacun, la moyenne des salaires de leur subordonnés. Trier le résultat
--selon la valeur de la moyenne par ordre décroissant.

select M1.emp_lastname ,avg (E1.emp_salary) as average_salary
from employees as M1
join employees as E1 on M1.emp_id = E1.emp_manager_id
group by M1.emp_id
order by average_salary desc;

--7 . Créer la requête SELECT correspondant au résultat suivant : 

select M1.emp_id,M1.emp_lastname,M1.emp_firstname,M1.emp_salary ,
count (E1.emp_id) as nb_sub,
sum (E1.emp_salary) as total_salary,
avg (E1.emp_salary) as average_salary,
min (E1.emp_salary) as poor_sub,
max (E1.emp_salary) as rich_sub
from employees as M1
inner join employees as E1 on E1.emp_manager_id is not null
where M1.emp_manager_id is null
group by M1.emp_id;

select count (*)from employees
