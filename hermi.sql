drop database cbtp;
CREATE database if not EXISTS `cbtp`;
use `cbtp`;
CREATE TABLE if not exists `cbtp`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `f_name` VARCHAR(45) NOT NULL,
  `m_name` VARCHAR(45) NOT NULL,
  `l_name` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `phone_number` VARCHAR(15) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  `image_url` varcharacter(255) not null,
  PRIMARY KEY (`user_id`));

CREATE TABLE if not exists `cbtp`.`mother_table` (
  `m_id` INT NOT NULL auto_increment,
  `f_name` VARCHAR(45) NOT NULL,
  `m_name` VARCHAR(45) NOT NULL,
  `l_name` VARCHAR(45) NOT NULL,
  `bithdate` DATE NOT NULL,
  `photo_url`  VARCHAR(255) not null,
  `blood_type` VARCHAR(5) not NULL,
  `m_phone` VARCHAR(15) not NULL,
  `zone` VARCHAR(45) not NULL,
  `wereda` VARCHAR(45) not NULL,
  `kebele` VARCHAR(45) not NULL,
  PRIMARY KEY (`m_id`));



CREATE TABLE if not exists `cbtp`.`child_table` (
  `c_id` INT NOT NULL auto_increment,
  `m_id` INT NOT NULL,
  `f_name` VARCHAR(45) NOT NULL,
  `m_name` VARCHAR(45) NOT NULL,
  `l_name` VARCHAR(45) NOT NULL,
  `bithdate` DATE not NULL,
  `blood_type` varchar(10) not null ,
  PRIMARY KEY (`c_id`),
    FOREIGN KEY (`m_id`)
    REFERENCES `cbtp`.`mother_table` (`m_id`)
	ON DELETE CASCADE);



CREATE TABLE IF NOT EXISTS `cbtp`.`mother_vaccin` (
  `mv_id` INT NOT NULL AUTO_INCREMENT,
  `m_id` INT NOT NULL,
  `tt1` TINYINT NOT NULL,
  `tt2` TINYINT NOT NULL,
  `tt3` TINYINT NOT NULL,
  `tt4` TINYINT NOT NULL,
  `tt5` TINYINT NOT NULL,
  `rh` TINYINT NOT NULL,
  PRIMARY KEY (`mv_id`),
  FOREIGN KEY (`m_id`)
  REFERENCES `cbtp`.`mother_table` (`m_id`)
  ON DELETE CASCADE
);

CREATE TABLE if not exists `cbtp`.`child_vaccine` (
  `cv_id` INT NOT NULL auto_increment,
  `c_id` INT NOT NULL,
  `r1` TINYINT not NULL,
  `r2` TINYINT not NULL,
  `r3` TINYINT not NULL,
  `r4` TINYINT not NULL,
  `r5` TINYINT not NULL,
  PRIMARY KEY (`cv_id`),
    FOREIGN KEY (`c_id`)
    REFERENCES `cbtp`.`child_table` (`c_id`)
    ON DELETE CASCADE );

CREATE TABLE if not exists cbtp.post (
  post_id INT not null auto_increment,
  tittle text not null,
  catagory text not null,
  description text not null,
  date_of_post DATETIME not null,
  PRIMARY KEY (post_id)
);


CREATE TABLE if not exists cbtp.post_img (
  post_img_id INT auto_increment not null,
  post_id INT not null,
  img_url VARCHAR(255) not null,
  PRIMARY KEY (post_img_id),
  FOREIGN KEY (post_id) REFERENCES cbtp.post (post_id)
);

insert into cbtp.users(f_name, m_name, l_name, username, password, phone_number, email, role, image_url)
			values('mihiretu', 'tigistu', 'hailegiorgis', 'zeru',
				'21232f297a57a5a743894a0e4a801fc3', '+251949229226', 
				'mihiretutigistu@gmail.com', 'admin', 'zeru.jpg');
