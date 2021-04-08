--1|Budapest I|VII. kerulet|2019-10-03|2019-10-03
--mysql> insert into apartments (name, address, created_at, updated_at) values ('Budapest I', 'VII. kerulet', sysdate(), sysdate());
insert into apartments (name, address, created_at, updated_at) values ('Budapest I', 'VII. kerulet', date('now'), date('now'));

insert into users (name, email, password, is_admin, created_at, updated_at) values ("admin", "gvamosi@yahoo.com", "almafa", true, "2020-03-19", "2020-03-19");

--1|Vamosi Gergely|gvamosi@yahoo.com||2019-10-10|2019-10-15|||1|en|2019-10-03|2019-10-03
INSERT INTO reservations (name, email, phone, checkin, checkout, message, approved, apartment_id, locale, created_at, updated_at) VALUES('Vamosi Gergely','gvamosi@yahoo.com',NULL,'2019-10-10','2019-10-15',NULL,NULL,1,'en','2019-10-03','2019-10-03');

