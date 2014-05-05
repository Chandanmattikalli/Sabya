<?php
$mysql_host = "localhost";
$mysql_database = "wtopen";
$mysql_user = "root";
$mysql_password = "root";
$conn=mysql_connect($mysql_host,$mysql_user,$mysql_password);
if(!$conn)
{
   die('could not connect:'.mysql_error());
}

if(!mysql_select_db($mysql_database))
{
    echo"database not selected";
}

$u=$_GET['id'];

$query="SELECT imgtype,imgdata FROM accessories WHERE name='$u';";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

Header( "Content-type: $row[0]");
echo $row[1];
echo "\n<IMG SRC=\"$row[1]\" />";  
?>