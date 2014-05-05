<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Login</title>
<meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
<meta name="description" content="Hangout Freaks - " />
<link href="templatemo_style2.css" rel="stylesheet" type="text/css" />
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
                $i=0;
                $username=$_REQUEST['id'];
            echo "<li><a href=book.php?id=$username>Check your books on sale</a></li>"; 
            echo "<li><a href='accessories.php?id=$username'>Check Accessories on sale</a></li>";
            echo "<li><a href='bidding.php?id=$username'>Buy</a></li>";
            echo "<li><a href='sellbook.php?id=$username'>Sell Books</a></li>";
            echo "<li><a href='sellacces.php?id=$username'>Sell Accessories</a></li>";
            echo "<li><a href='discussion1.php?id=$username'>Discussion forum</a></li>";
            echo "<li><a href='home.php'>Logout</a></li>";
                ?>
        </ul>
        
            <div id="templatemo_content_left">             
       
                
                <div class="cleaner_with_height">&nbsp;</div>
                <div class="cleaner_with_height">&nbsp;</div>
                
   
                <div class="container">
                    
               
       <?php 
                $i=0;
                $username=$_REQUEST['id'];
                $array=Array();
                $con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db");  
                $sql="select * from signup where username='$username';";  
                $res=  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    $array[$i++]=$row['fname'];
                    $array[$i++]=$row['mname'];
                    $array[$i++]=$row['lname'];
                    $array[$i++]=$row['room'];
                    $array[$i++]=$row['sem'];
                    $array[$i++]=$row['phone'];
                    $array[$i++]=$row['email'];
                    $array[$i++]=$row['username'];    
                    $array[$i++]=$row['itemno'];
                   // $array[$i++]=$row['id'];
                }
                if($res)
                {
                    echo"<div class='abovebox'>";
                   
                     echo"<div id='templatemo_welcome'>";
                           echo "<h2><font size='3' color='black'>Welcome ".ucfirst($username)."</font></h2><br><br>";
                           //echo"<img src='image.php?id=$username' width='100px' height='100px' /><br>";
                    echo"</div><br><br>";
                     echo"<img src='image.php?id=$username' width='100px' height='100px' /><br>";
                     //echo "\n<IMG SRC=\"get_image.php?id=$u\" />";  
                   
                  
                   echo "<td colspan='2'>";
                   echo"</div>";
                   echo"<div class='box'>";
                   echo "<table>";
                  //echo "<TEXTAREA rows=5 cols=30  readonly>Name:'$array[0] $array[1] $array[2].'\nRoom:'$array[3]'\n Room:'$array[3]'\n";
                   echo "<tr>";
                   echo "<td>";
                   echo "Name ";    
                   echo "</td>";
                   echo "<td>";
                   echo "<input type='text' value='$array[0] $array[1] $array[2].'><br>";
                   echo "</td>";
                   echo "<tr>";
                   echo "<tr>";
                   echo "<td>";
                   echo "Room  ";    
                   echo "</td>";
                   echo "<td>";
                   echo "<input type='text' value='$array[3]'><br>";
                   echo "</td>";
                   echo "<tr>";
                   echo "<td>" ;
                   echo "Semester";
                   echo "</td>";
                   echo "<td>";
                   echo "<input type='text' value='$array[4]'><br>";
                   echo "</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>";
                   echo "Phone Number";
                   echo "</td>";
                   echo "<td>";
                   echo "<input type='text' value='$array[5]'><br>";
                   echo "</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>";
                   echo "Email";
                   echo "</td>";
                   echo "<td>";
                   echo "<input type='text' value='$array[6]' size='25px'><br>";
                   echo "</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>";
                   echo "Your Items on sale are";
                   echo "</td>";
                   echo "<td>";
                   echo "<input type='text' value='$array[8]'><br>";
                  echo "</td>"  ;
                   echo "</tr>";
                  echo "</table>";
                  echo "</div>";
                   
                 
                }
                else
                {
                   echo "<script type='text/javascript'>"; 
                   echo "alert('Could not retreive user details')"; 
                   echo "</script>";
                }
            //main if
            if(isset($_POST['back']))
            {
                header("Location: index.php?id=$username");
            }
       ?>   
             </div>
            </div><!-- container -->
             
        </div>
        </div> 
         
       
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
    </body>
</html>