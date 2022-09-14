truncate cars;
truncate owners;
truncate brands;

insert into cars( cars_id,cars_registration,cars_name)
values 
(12,'AA-123-AA','Chevrolet'),
(16,'BB-274-BB','Audi'),
(21,'CA-789-BA','Toyota'),
(19,'CC-546-FV','Chevrolet'),
(27,'CG-274-ZG','Peugeot'),
(30,'ER-355-GX','Audi'),
(28,'FV-313-FT','Audi'),
(23,'DE-228-KS','AMC '),
(26,'CF-614-PM','Peugeot');

insert into owners(owner_id,owner_lastname,owner_firstname)
values
(1,'Petit','Annie'),
(5,'jones','steeven'),
(2,'Marsfall','Bénédicte'),
(4,'Bouchra','Amine'),
(4,'Bouchra','Amine'),
(3,'Doe','John'),
(5,'Jones','Steeven'),
(5,'Jones','Steeven'),
((5,'Jones','Steeven');


insert into brands (brand_id ,brand_name,brand_slogan)
values
(1,'Chevelle Concours',null),
(5,'A6 Break',null),
(2,'Corolla',null),
(4,'Monte Carlo',null),
(4,504,null),
(3,'Q8',null),
(5,'100 LS',NULL),
(5,'Hornet',null),
(5,3008,null);
