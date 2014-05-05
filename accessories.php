<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Accessories View for User</title>
         <meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
        <meta name="description" content="Hangout Freaks - " />
        <link href="templatemo_style2.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="style_login1.css" />
        
    </head>
    <body> 
        <div id ="templatemo_container">
      <div class='wrapper'>
          <div id="templatemo_banner">
    <img src="images/logo.png"  alt="LOGO " title="Hostel Needs" border="0" height="200" width="900"/> 	
    </div>
          <div id="templatemo_menu_panel">
    <h2><font size="3" color="#be457c">Delivering Happiness</font></h2>
       
    </div>
     <div id="templatemo_content">
         <ul>
            <?php 
                $i=0;
                $username=$_REQUEST['id'];
            echo"<li><a href='home.php'>Home</a></li> "; 
            echo"<li><a href='myprofile.php?id=$username'>My Profile</a></li>'";
             echo"<li><a href='myprofile.php?id=$username'>Back</a></li>";
            echo"<li><a href='home.php'>Logout</a></li>";
            ?>
        </ul>
            <div id="templatemo_content_left">
                <div class="cleaner_with_height">&nbsp;</div>
                
                <div class="container">
               
       <?php
                $i=0;
                $j=0;
                $username=$_REQUEST['id'];
               
                $array=Array();
                $con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db");  
                
                 
                 
                   echo"<table> ";
                   echo "<tr>";
                   echo "<td colspan='3'>";
                    echo"<div id='templatemo_hello'>";
                           echo "<h2><font size='3' color='black'>Hello ".ucfirst($username)."</font></h2><br><br>";
                    echo"</div><br><br>";
                   echo "</td>";
                   echo "</tr>";
                  
                  
                  
                $sql="select * from accessories where username='$username';";  
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td>";
                    $name=$row['name'];
                    $desc=$row['description'];
                    $cat=$row['category'];
                    $price=$row['price'];
                    echo"<img src='atry.php?id=$name' width='100px' height='100px'/>";
                    echo "<TEXTAREA rows=10 cols=50  readonly>Name:$name\n Description:$desc\n Category:$cat\n Price Detail:$price";
                    echo"</TEXTAREA><br>";
                    $sql1="select * from abidder where sellername='$username' and aname='$name';";  
                    $res1 =  mysql_query($sql1);
                    echo"<div class='box'>";
                    while($row=  mysql_fetch_array($res1))
                    {
                        $bname=$row['biddername'];
                        $bphone=$row['bphone'];
                        $bemail=$row['bemail'];
                        $broom=$row['broom'];
                        $bprice=$row['bprice'];
                    
                    echo "Bidder Details:<TEXTAREA rows=6 cols=50  readonly>Bidder Name:$bname\nPhone:$bphone\n Email:$bemail\n Room no.:$broom\n Price:$bprice";
                    echo"</TEXTAREA><br>";
                    }
                    echo "</td>";
                   echo "</tr>";                   
              }
              echo "</table>";
              echo"</div>";
               if(isset($_POST['submit']))
                {
                 
                  $name=$_POST['a_name'];
                  if($name=="")
                  {
                            echo "<script type='text/javascript'>"; 
                            echo "alert('Do not leave accessory name field blank!!')"; 
                            echo "</script>";    
                  }
                 else 
                     {
                  $sql="delete from accessories where name='$name';";  
                  $res=  mysql_query($sql);
                  
                  if($res)
                      {
                       $sql2="delete from abidder where aname='$name';";
                       $res2=mysql_query($sql2);
                       if($res2)
                       {
                       $sql1="select itemno from signup where username='$username';";  
                       $res1=  mysql_query($sql1);
                       while($row = mysql_fetch_array($res1))
                       {
                            $count=(int)$row['itemno'];    
                       }
                       if($res1)
                       {
                            $count--;
                            $itemno=(string)$count;
                            $sql3="update signup set itemno='$itemno' where username='$username';";  
                            $res3=  mysql_query($sql3);
                            if($res3)
                            {
                                 header("Location: myprofile.php?id=$username");
                            }
                            else
                            {
                                echo "Item number is not updated";
                            }
                       }
                       }
                       else
                       {
                           echo "bidder not delete";
                       }
                 }
                 else
                 {
                     echo mysql_error();
                 }
                }      
                }      
       ?>    
                    <form method="POST">
                        <font color="white">Enter the name accessory to remove from sale:</font><input type='text' name='a_name' /><br><br>
                         <input type='submit' name='submit' value='DELETE'/>
                     </form>
        </div><!-- container -->
             
        </div>
        </div> 
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
    </body>
</html>