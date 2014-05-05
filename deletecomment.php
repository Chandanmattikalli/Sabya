<?php
$id=$_REQUEST['id'];
$username=$_REQUEST['username'];
$con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db");
$sql="delete from discussion where posted_by='$username' and msgid='$id'";
$result=mysql_query($sql);

if($result)
{
$sql1="delete from discussion where reply_id='$id'";
$result1=mysql_query($sql1);

if($result1)
{
header("Location:discussion1.php?id=$username");
}
else
{
echo "<script type='text/javascript'>"; 
                     echo "alert('error in deleting!!')"; 
                     echo "</script>";
}

}
else
{
echo "<script type='text/javascript'>"; 
                     echo "alert('error in deleting!!')"; 
                     echo "</script>";
}
?>