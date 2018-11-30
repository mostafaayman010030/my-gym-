<?php

include ('database.php');

$tbl="CREATE TABLE IF NOT EXISTS user(
      id int(11) not null auto_increment primary key,
      name varchar(50) not null,
      country varchar(50) not null,
      region varchar(50) not null,
      email varchar(50) not null);";
      $db->myExec($tbl);

 $insert="INSERT INTO user VALUES
        (1,'asd1','Egypt','mok1','email1'),
        (2,'asd2','Egypt','mok2','email2'),
        (3,'asd3','Egypt','mok3','email3'),
        (4,'asd4','Egypt','mok4','email4');";

       $db->myExec($insert);
       ?>
