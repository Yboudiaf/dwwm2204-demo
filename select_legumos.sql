
--1--selectionner toutes les informations des legumes tries par nom de legumes(ordre alphabetique)
select id,Name,variety,PrimaryColor,LifeTime,Fresh
from Vegetables
order by name asc;


--2--selectionner le nom et le prix pour chaque varieter de legume
--afficher le nombres de ventes ainsi que le poids total vendu
--les legumes sont triees par ordre de ventes.
select name,SaleUnitPrice,SaleActive,count(SaleWeight)
from Vegetables
inner join sales 
on sales.Saleld = Vegetables.id
group by name,SaleUnitPrice,SaleActive,SaleWeight
order by SaleActive asc;

--3--selectionner toutes les informations des legumes dont
--a--dont le nom contient la chaine(on) ou
--b--dont la couleur principal est verte
----afficher uniquement les legume correspondant a l'une des 2 conditions.
--(les legumes corespondant aux 2 conditions ne seront pas afficher)
)
select id,Name,variety,PrimaryColor,LifeTime,Fresh
from Vegetables
where Name = 'on%'
or PrimaryColor = 'green'
or Name <> 'on%' and  PrimaryColor = 'green'
or PrimaryColor = 'green' and Name <> 'on%';



--4-- selectionner pour chaque legume
select Name, variety,count (SaleUnitPrice),avg (SaleWeight),max (SaleWeight), max (SaleUnitPrice)
from Vegetables
inner join sales onsales.Saleld = Vegetables.id
group by Name,variety,SaleUnitPrice,SaleWeight