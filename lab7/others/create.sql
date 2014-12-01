CREATE TABLE login_table(
login_id INT(11) UNSIGNED auto_increment, 
login_fname VARCHAR(255), 
login_sname VARCHAR(255), 
login_email VARCHAR(255), 
login_password VARCHAR(255),
login_sex VARCHAR(10), 
login_birthday DATE,
PRIMARY KEY(login_id));