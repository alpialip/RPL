<?php
/*
* NAME : M. RIFQI THOMI F.H
* EMAIL : rifqithomi@gmail.com / rifqithomi@yahoo.co.id / rifqithomi@outlook.com
* Linkedin : id.linkedin.com/in/rifqithomi/
*/
define('DB_HOST', 'localhost');
define('DB_NAME', 'rpl');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//$base_url='http://demobacakanbdg.esy.es/';
?>