
<?php

include ('database.php');

$tbl="CREATE TABLE IF NOT EXISTS user(
      id int(11) not null auto_increment primary key,
      First Name varchar(50) not null,
      Last Name varchar(50) not null,
      email varchar(50) not null,
      Password varchar(50) not null,
      Phone_number int(50) not null,
    );";
      $db->myExec($tbl);

 $insert="INSERT INTO user VALUES
        (1,'mostafa','ayman','mostafaayman010030@gmail.com','asdasd1',01003078570),
        (2,'ahmed','ahmed','ahmedahmed0@gmail.com','asdasd2',01003078570),
        (3,'ali','ali','akiaki0@gmail.com','asdasd3',,01003078570),
        (4,'mohamed','ahmed','mohamedmohamed0@gmail.com','asdasd4',01003078570);";

       $db->myExec($insert);
       ?>
