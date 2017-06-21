
--QQZONE数据库结构
CREATE DATABASE  notebook
CHARACTER SET 'utf8' 
COLLATE 'utf8_general_ci'; 
--用户表
create table user_log(
  id int(11) unsigned auto_increment key,
  username varchar(20) not null unique,
  password varchar(32) not null ,
  email varchar(50) not null
);
insert into user_log(username,password,email)value('admin','admin','1@qq.com');
--用户信息表

create table user_info(
  id int(11) unsigned auto_increment key,
  user_id int unsigned not null unique,
  user_name varchar(10) not null,
  user_idcard varchar(20) ,
  user_friend varchar(200),
  user_sex enum("男","女","保密") not null default "保密",
  user_birth varchar(20) not null,
  user_telno varchar(15) not null 
);

insert into user_info(user_id, user_name,user_sex,user_birth,user_telno)value(1,'admin','男','1996-05-06',12345678901);
update user_info set user_idcard ='23248576968574658798' where id =1;
--content表

create table content(
  id int(11)  unsigned auto_increment key,
  user_id int(11) not null ,
  contents varchar(200) not null,
  create_time varchar(20),
  likes int unsigned default 0,
  dislike int unsigned default 0,
  user_isVisited int(1) not null default 0
);

--留言信息表

create table notes(
  id int unsigned auto_increment key,
  note_to_id int(11) not null,
  note_from_id int(11) not null,
  note_content varchar(200)  not null,
  note_time varchar(20) not null  
);
