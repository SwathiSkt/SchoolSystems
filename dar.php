<?php
include("config.php");


$username_array = array(); 

$result = mysql_query("SELECT * FROM user");
while($row = mysql_fetch_array($result))
{ 
  $username_array[] = "\"".$row['email']."\""; 
}

$username_string = implode(",", $username_array); 

echo $username_string;


?>