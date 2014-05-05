<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Discussion Forum</title>
<meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
<meta name="description" content="Hangout Freaks - " />
<link href="templatemo_style3.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style_login1.css" />
</head>
<body>
<?php
$username=$_REQUEST['id'];
$con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db"); 
echo"<div id='templatemo_container'>";

   echo" <div id='templatemo_banner'>";
    echo"<img src='images/logo.png'  alt='LOGO' title='Hostel Needs' border='0' height='200' width='900'/> ";	
  echo"  </div>";
echo"<div class='wrapper'>";
    echo"<div id='templatemo_content'>";
         echo"<ul>";
            
            echo"<li><a href='home.php'>Home</a></li> "; 
            echo" <li><a href='myprofile.php?id=$username'><font size='2' >MyProfile</font></a></li>";
            echo" <li><a href='edit.php?id=$username'><font size='2' >Edit Your Comments</font></a></li>";
            
        echo"</ul>";
            echo"<div id='templatemo_content_left'>";
                echo"<div class='cleaner_with_height'>&nbsp;</div>";
                echo"<div class='cleaner_with_height'>&nbsp;</div>";
                
                echo"<div class='container'>";
                echo"	</div>";
                echo"<section id='content'>";
		echo"<form method='POST'>";
		echo"	<h1>Discussion forum</h1>";
		echo"	<div>";
 echo"<textarea  rows='7' cols='25' name='msg' placeholder='Whats on your mind?'></textarea>";
			echo"</div>";
			
    echo"<div>";
        

				echo"<input type='submit' value='POST' name='post'  />";
				
				echo"<a href='myprofile.php?id=$username'>My profile</a>";
			echo"</div>";
		echo"</form><!-- form -->";
	echo"</section><br><br><!-- content -->";
	  $sql="select * from discussion where reply_id='0' order by msgid desc;";  
          echo"<div class='box'>";
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    $id=$row['msgid'];
                    $msg=$row['msg'];
                    $posted_by=$row['posted_by'];
                    $time=$row['utime']; 
                   echo "<a href='post.php?id=$id&amp;username=$username'>";
                    echo "<TEXTAREA rows=10 cols=50  readonly>Comment:$msg\nPosted by:$posted_by\nTime:$time\n\n";
					//echo "<h4>Comment:$msg<br>Posted by:$posted_by<br>Time:$time<br><br>";
				$sql1="select * from discussion where reply_id='$id';";  
                $res1 =  mysql_query($sql1);
                while($row=  mysql_fetch_array($res1))
                {
                    $msg1=$row['msg'];
                    $posted_by1=$row['posted_by'];
                    $time1=$row['utime']; 
      
                    echo "\nReply:$msg1\nReplied by:$posted_by1\nTime:$time1\n";
                  
	            }   //echo"</h4>";
                   echo"</TEXTAREA><br><br>";
					echo"</a>"; 
					
	            }
	
	
	   echo"  </div>";
          echo"  </div><!-- container -->";
             
        echo"</div>";
        echo"</div> ";
        
       echo" <div class='cleaner'>&nbsp;</div>";
   echo" </div>";
echo"</div>";

if(isset($_POST['post']))
{
$msg=$_POST['msg'];
                  
echo"".$msg." ".$username." ";
echo "now";
 
$query="insert into discussion (msg,posted_by,utime,reply_id) values('$msg','$username',now(),0);";
$result=mysql_query($query);
if($result)
{
                     echo "<script type='text/javascript'>"; 
                      
                     echo "alert('Posted successfully!!')"; 
                    header("Location : discussion1.php?id=$username");
                     echo "</script>";
}
else
{
                     echo "<script type='text/javascript'>"; 
                     echo "alert('Sorry Could not post!!')"; 
                     echo "</script>";
					 echo ''.mysql_error();
}
				
}



?>
</body>
</html>