<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment</title>
<meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
<meta name="description" content="Hangout Freaks - " />
<link href="templatemo_style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style_login.css" />
</head>
<body>
      <div id="templatemo_container">

    <div id="templatemo_banner">
    <img src="images/logo.png"  alt="LOGO " title="Hostel Needs" border="0" height="200" width="900"/> 	
    </div>
     <div class='wrapper'>
<div id="templatemo_menu_panel">
    <h2><font size="3" color="#be457c">Delivering Happiness</font></h2>
       
    </div>
    <div id="templatemo_content">
        <ul>
	   <?php
	   $username=$_REQUEST['id'];
	   echo" <li><a href='myprofile.php?id=$username'><font size='2' >MyProfile</font></a></li>";
            echo" <li><a href='discussion1.php?id=$username'><font size='2' >Back</font></a></li>";
            echo"</div>";
           echo" </ul>";
              echo"<div class='cleaner_with_height'>&nbsp;</div>";
               echo" <div class='cleaner_with_height'>&nbsp;</div>";
                
            
                $con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db");  
   
   $sql="select * from discussion where posted_by='$username' order by utime desc;";  
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    $id=$row['msgid'];
                    $msg=$row['msg'];
                    $posted_by=$row['posted_by'];
                    $time=$row['utime']; 
                   
                    echo "<TEXTAREA rows=20 cols=50 readonly>Comment:$msg\nPosted by:$posted_by\nTime:$time\n\n";
					
				$sql1="select * from discussion where reply_id='$id';";  
                $res1 =  mysql_query($sql1);
                while($row=  mysql_fetch_array($res1))
                {
                    $msg1=$row['msg'];
                    $posted_by1=$row['posted_by'];
                    $time1=$row['utime']; 
      
                    echo "Reply:$msg1\nReplied by:$posted_by1\nTime:$time1\n\n";
                  
	            }
                    echo"</TEXTAREA><a href='deletecomment.php?id=$id&amp;username=$username'>DELETE</a>";
				}	
	            
				/*echo "<form action='' method='POST'>";
				echo"<textarea rows=5 cols=50 name='text' placeholder='Whats on your mind?'> </textarea> ";
				echo"<input type='submit' value='COMMENT' name='comment'>";
				echo"</form>";
				
				if(isset($_POST['comment']))
				{
				$reply=$_POST['text'];
				if($reply=="")
				{
				  echo "<script type='text/javascript'>"; 
                     echo "alert('enter a valid comment!!')"; 
                     echo "</script>";
				}
				else
				{
				$query="insert into discussion (msg,posted_by,utime,reply_id) values('$reply','$username',now(),'$id');";
                 $result=mysql_query($query);
				   if($result)
{
                     echo "<script type='text/javascript'>"; 
                     echo "alert('Posted successfully!!')"; 
                     echo "</script>";
					                         header("Location: discussion1.php?id=$username");
											 }
					
else
{
                     echo "<script type='text/javascript'>"; 
                     echo "alert('Sorry Could not post!!')"; 
                     echo "</script>";
					 echo ''.mysql_error();
}
				}
				
				}*/
	   ?>
	   
	   
	   
      
    <div class="cleaner">&nbsp;</div>
    </div>
	</div>

</body>
</html>