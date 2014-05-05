<?php

$mysql_host = "localhost";
$mysql_database = "wtopen";
$mysql_user = "root";
$mysql_password = "";
$conn=mysql_connect($mysql_host,$mysql_user,$mysql_password);
if(!$conn)
{
   die('could not connect:'.mysql_error());
}

if(!mysql_select_db($mysql_database))
{
    echo"database not selected";
}

$id=$_POST['user'];

$query="SELECT imgtype,imgdata FROM signup WHERE username='$id';";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

Header( "Content-type: $row[0]");
echo $row[1];

?>