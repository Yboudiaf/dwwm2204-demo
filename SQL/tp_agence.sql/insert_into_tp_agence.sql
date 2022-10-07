

insert into AGENCE_TITANIC (id_adresse_mail_agence ,nom_agence ,ville_agence ,code_postal_agence ,n_rue_agence ,n_telephone_agence)
values
('agence_titanic@outlook.fr','titanic','mulhouse',68000,56,047725458),
('agence_mer@outlook.fr','bord_de_mer','mulhouse',68000,13,047225451),
('agence_francec@outlook.fr','air france','lyon',69000,25,047325452),
('agence_usac@outlook.fr','air usa','nice',14000,33,047425453),
('agence_havre@outlook.fr','jet','le havre',62000,42,047525454),
('agence_lyon@outlook.fr','easy jet','lyon',69000,12,047625457),
('agence_paris@outlook.fr','lohcost','paris',75000,25,04725450);



insert into COMMERCIAUX(id_adresse_mail_commerciaux, commerciaux_portefeuille_client, nom_commerciaux,
						prenom_commerciaux, communes_commerciaux, formation_specifique_commerciaux, id_adresse_mail_agence )
values 
('david@outlook.fr','toto','CRAVO','david','mulhouse',true,'agence_titanic@outlook.fr'),
('yacine@outlook.fr','tata' ,'BOUDIAF','yacine','lyon',false,'agence_mer@outlook.fr'),
('bastien@outlook.fr','titi','LISTING','bastien','normandi',true ,'agence_francec@outlook.fr'),
('jose@outlook.fr','tete','RIBEIRO','jose','mulhouse',true,'agence_usac@outlook.fr'),
('julian@outlook.fr','tutu', 'KREINZ','julian','colmar',true,'agence_havre@outlook.fr'),
('daoud@outlook.fr', 'tyty','DOGMAN','daoud','marseille',false,'agence_lyon@outlook.fr'),
('willy@outlook.fr','toutou','KIPS','willy','lille',false,'agence_paris@outlook.fr');





insert into CLIENT(id_adresse_mail_client, nom_client, prenom_client, n_telephone_client, id_adresse_mail_commerciaux)
values 
('toto@outlook.fr','toto','vovo',337421545,'david@outlook.fr'),
('tata@outlook.fr', 'tata','vava', 337124572, 'yacine@outlook.fr'),
('titi@outlook.fr','titi','vivi',33702154,'bastien@outlook.fr'),
('tete@outlook.fr', 'tete','veve', 337334571, 'yacine@outlook.fr'),
('tutu@outlook.fr','tutu','vuvu',337121542,'david@outlook.fr'),
('tyty@outlook.fr', 'tyty','vyvy', 337324573, 'jose@outlook.fr'),
('toutou@outlook.fr','toutou','vouvou',337721544,'willy@outlook.fr');






insert into VOYAGES(id_voyage, offre_voyage, duree_voyage, informations_voyage, tarif_pers, destination_voyage, escales_voyages, services_particuliers_voyage)
values
(1,'-20%','7 jours','Le port du masque (sans valve) est fortement recommandé à bord de nos avions ','280/pers','espagne','sans escale','all exclusive'),
(2,'-30%','3 jours','Le port du masque (sans valve) est fortement recommandé à bord de nos avions ','180/pers','Maroc','sans escale','demie pension'),
(3,'plein tarif','10 jours','Le port du masque (sans valve) est fortement recommandé à bord de nos avions ','580/pers','tahiti','sans escale','all exclusive'),
(4,'-50%','30 jours','Le port du masque (sans valve) est fortement recommandé à bord de nos avions ','1180/pers','madagascar','sans escale','demie pension'),
(5,'-10%','5 jours','Le port du masque (sans valve) est fortement recommandé à bord de nos avions ','220/pers','portugal','sans escale','all exclusive'),
(6,'demie tarif','3 jours','Le port du masque (sans valve) est fortement recommandé à bord de nos avions ','80/pers','senegal','sans escale','demie pension');


insert into secteur(id_num_secteur, secteurs_commerciaux, secteurs_commune)
values
(10,'mulhouse','Brunstatt-Didenheim'),
(11,'lyon','Brunstatt-Didenheim'),
(12,'normandi','etretat'),
(13,'mulhouse',' Bruebach'),
(14,'colmar','wintzenheim'),
(15,'marseille','felix piat'),
(16,'lille','parc');







insert into gerer(id_adresse_mail_client, id_voyage)
values
('toto@outlook.fr',1),
('tata@outlook.fr',2),
('titi@outlook.fr',3),
('tete@outlook.fr',4),
('tutu@outlook.fr',5),
('tyty@outlook.fr',6);





insert into affecter(id_adresse_mail_commerciaux, id_num_secteur)
values
('david@outlook.fr',10),
('yacine@outlook.fr',11),
('bastien@outlook.fr',12),
('yacine@outlook.fr',13),
('david@outlook.fr',14),
('jose@outlook.fr',15),
('willy@outlook.fr',16);











