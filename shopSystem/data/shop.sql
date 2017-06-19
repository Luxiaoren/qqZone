CREATE DATABASE IF NOT EXISTS 'shopImooc';

USE 'shopImooc';

--����Ա��
DROP TABLE IF EXISTS 'Imooc_admin';

CREATE TABLE imooc_admin(
	id tinyint unsigned auto_increment key,
	username varchar(20) not null unique,
	password char(32) not null,
	email varchar(50) not null
 );
 
 --�����
 
 DROP TABLE IF EXISTS 'imooc_cat';
 
 CREATE TABLE imooc_cat(
 	id smallint unsigned auto_increment key,
 	cName varchar(50) not null unique
 	
 );
 
--��Ʒ��
 DROP TABLE IF EXISTS imooc_pro;
 create table imooc_pro(
 	id int unsigned auto_increment key,
 	pName varchar(50) not null unique,
 	pSn varchar(50) not null,
 	pNum int unsigned default 1,
 	mPrice decimal(10,2) not null,
 	iPrice decimal(10,1) not null,
 	pDesc text,
 	pImg varchar(50) not null,
 	pubTime int unsigned not null,
 	isShow tinyint(1) default 1,
 	isHot tinyint(1) default 0,
 	cId smallint unsigned not null
 );


 --�û���
  drop table if exists imooc_user;
  create table imooc_user(
  	id int unsigned auto_increment key,
  	usernaem varchar(20)  not null unique,
  	password varchar(20) not null ,
  	sex enum("��","Ů","����") not null default "����",
  	face varchar(50) not null,
  	regTime int unsigned  not null
  ); 
  
  --����
  drop table if exists imooc_album;
  create table imooc_album(
  	id int unsigned auto_increment key,
  	pid int unsigned not null,
  	albumPath varchar(50) not null
  );