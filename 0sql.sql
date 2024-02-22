CREATE database if not EXISTS `infant`;
CREATE TABLE if not exists `cbtp`.`users` (
  `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` VARCHAR(45) NOT NULL,
  `m_name` VARCHAR(45) NOT NULL,
  `l_name` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `phone_number` VARCHAR(15) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`user_id`));

CREATE TABLE if not exists `cbtp`.`mother_table` (
  `m_id` INT NOT NULL,
  `f_name` VARCHAR(45) NOT NULL,
  `m_name` VARCHAR(45) NOT NULL,
  `l_name` VARCHAR(45) NOT NULL,
  `bithdate` DATE NOT NULL,
  `photo_url`  VARCHAR(255),
  `blood_type` VARCHAR(5) NULL,
  `m_phone` VARCHAR(15) NULL,
  `zone` VARCHAR(45) NULL,
  `wereda` VARCHAR(45) NULL,
  `kebele` VARCHAR(45) NULL,
  PRIMARY KEY (`m_id`));

CREATE TABLE if not exists `cbtp`.`child_table` (
  `c_id` INT NOT NULL auto_increment,
  `m_id` INT NOT NULL,
  `f_name` VARCHAR(45) NOT NULL,
  `m_name` VARCHAR(45) NOT NULL,
  `l_name` VARCHAR(45) NOT NULL,
  `bithdate` DATE not NULL,
  `blood_type` varchar(10) not null  
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


INSERT into cbtp.users








CREATE TABLE cbtp.post_img (
  post_img_id INT auto_increment not null,
  post_id INT not null,
  img_url VARCHAR(255) not null,
  PRIMARY KEY (post_img_id),
  FOREIGN KEY (post_id) REFERENCES cbtp.post (post_id)
);




USE cbtp;
SELECT post.tittle, 
       post.catagory,
       post.description,
       post.date_of_post,
       post_img.img_url
FROM post
INNER JOIN post_img
  ON post.post_id = post_img.post_id order by post.date_of_post;



<!-- News Card -->
                    <div class="card">
                      <img src="./images/posts/<?php echo $img_url; ?>" class="card-img-top" alt="<?php echo $img_url; ?>">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $title; ?></h5>
                        <p class="card-text"><?php echo $description; ?>(cropped)</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
                    <!-- End News Card -->






INSERT INTO mother_table (m_id, f_name, m_name, l_name, bithdate, photo_url, blood_type, m_phone, zone, wereda, kebele)
VALUES (1, 'John', 'Doe', 'Smith', '1990-01-01', 'photo.jpg', 'O+', '1234567890', 'Zone A', 'Wereda B', 'Kebele C');

INSERT INTO mother_vaccin (mv_id, m_id, tt1, tt2, tt3, tt4, tt5, rh)
VALUES (1, 1, 1, 0, 1, 0, 1, 0);


