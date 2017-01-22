create database skyking;

use skyking;

Create table customer(user_id varchar(10) not null, First_name char(20),Last_name char(20),
Contact_no  varchar(20),age int,Email_id varchar(30),Cust_type char(5),Mem_id varchar(20),
Password varchar(30),payment_id varchar(20));


Create table payment(payment_id varchar(20)  not null,payment_date date,amount int,balance int);

create table schedule(flight_id varchar(10) not null,leaving_from
char(10), Destination char(10),dep_time datetime,arr_time datetime,fares_id varchar(10) not null);

create table fares(fares_id varchar(10),eco int,bus int,exe int);

create table ticket(user_id varchar(20) not null,reg_no varchar(20) not null,Seat_no varchar(20) not null,Leaving_from char(10),Destination char(10),trip char(10),Date_apr date,Date_dep date,ticket_class char(10),fares int,status char(10));


create table aircraft (flight_id varchar(20) not null,model_no varchar(20) not null,flight_level varchar(10),airport_code varchar(20),altitude int,cruising_speed  varchar(20));

create table airports(airport_code varchar(10) not null,airport_name char(10),Model_no varchar(10) not null,airport_location char(10));

Alter table customer add constraint unique(contact_no);


 insert into schedule values('AFS_20MD','Mumbai','Delhi','7pm','9pm','FAR_MD');

 insert into schedule values('AFS_10MK','Mumbai','Kolkata','9am','12pm','FAR_MK');

 insert into schedule values('AFS_10MK','Kolkata','Mumbai','7pm','10pm','FAR_MK');


 insert into schedule values('AFS_10MC','Mumbai','Chennai','7am','9am','FAR_MC');

 insert into schedule values('AFS_10MC','Chennai','Mumbai','5pm','7pm','FAR_MC');

 insert into schedule values('AFS_10DC','Delhi','Chennai','7am','10am','FAR_DC');

 insert into schedule values('AFS_10DC','Chennai','Delhi','4pm','7pm','FAR_DC');

 insert into schedule values('AFS_10DK','Delhi','Kolkata','8am','10am','FAR_DK');

 insert into schedule values('AFS_10DK','Kolkata','Delhi','12pm','2pm','FAR_DK');

 insert into schedule values('AFS_10CK','Chennai','Kolkata','10am','1pm','FAR_CK');

 insert into schedule values('AFS_10CK','Kolkata','Chennai','2pm','5pm','FAR_CK');





insert into fares values('FAR_MD',10000,15000,30000);

 insert into fares values('FAR_MK',10000,20000,40000);

 insert into fares values('FAR_MC',10000,15000,30000);

 insert into fares values('FAR_DC',12000,17000,34000);

 insert into fares values('FAR_DK',10000,15000,30000);

 insert into fares values('FAR_CK',13000,17000,34000);




