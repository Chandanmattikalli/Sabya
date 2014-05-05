<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bidding</title>
         <link rel="stylesheet" href="css/master_page.css" type="text/css" />
        <meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
       <meta name="description" content="Hangout Freaks - " />
       <link href="templatemo_style1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="style_login.css" />
        
    </head>
   <body> 
          <div id="templatemo_container">
      <div class="wrapper">  
         
          <table  width="100%">
              <tr>
              
                  <td colspan="6">
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
                $username=$_REQUEST['username'];
            echo"<li><a href='home.php'>Home</a></li> "; 
            echo"<li><a href='myprofile.php?id=$username'>My Profile</a></li>'";
             echo"<li><a href='myprofile.php?id=$username'>Back</a></li>";
            echo"<li><a href='home.php'>Logout</a></li>";
            ?>
        </ul>
            <div id="templatemo_content_left">
                <div class="cleaner_with_height">&nbsp;</div>
                <div class="cleaner_with_height">&nbsp;</div>
                
                <div class="container">
                      <div class ="categories">
       
             
                 
                 <?php
        
            
                $bookname=$_REQUEST['id'];
                $biddername=$_REQUEST['username'];
                
                
                $con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db"); 
                $sql="select * from bookbidder where bookname='$bookname' and biddername='$biddername';"; 
                $res =  mysql_query($sql);
                $num_rows=mysql_num_rows($res);
                if($num_rows>0)
                {
                    $sql="select * from books where name='$bookname';"; 
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                     
                     $desc=$row['description'];
                     $sellername=$row['username'];
                     $cat=$row['category'];
                     $sem=$row['sem'];
                     $price=$row['price']; 
                }
                $sql="select * from signup where username='$sellername';"; 
                $res =  mysql_query($sql);
                $row=  mysql_fetch_array($res);
                     $room=$row['room'];
                     $email=$row['email'];
                     $fname=$row['fname'];
                     $mname=$row['mname'];
                     $lname=$row['lname'];

                     $phone=$row['phone'];
                echo "<form method='POST'>";
                echo"<img src='btry.php?id=$bookname' width='100px' height='100px'/>";
                echo "<TEXTAREA rows=10 cols=50  readonly>Name:$bookname\n Description:$desc\n Category:$cat\n Sem:$sem\n Posted By:$fname $mname $lname\n Phone No.:$phone\n Email:$email\n Room No.:$room\n Price Detail:$price";
                echo"</TEXTAREA><br>";
                echo "Enter your new bidding amount<input type='text' name='pricetag'/>";
                echo "<input type='submit' name='submit' value='done'/>";   
                echo "</form>";
               if(isset($_POST['submit']))
               {   
                   $bprice=$_POST['pricetag']; 
                    $sql="update bookbidder set bprice='$bprice' where biddername='$biddername'";
                    $res =  mysql_query($sql);
                    if($res)
                    {
                        header("Location: bidding.php?id=$biddername");
                    }
                    
                }
                
                }
                else
                {
                $sql="select * from books where name='$bookname';"; 
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                     
                     $desc=$row['description'];
                     $sellername=$row['username'];
                     $cat=$row['category'];
                     $sem=$row['sem'];
                     $price=$row['price']; 
                }
                $sql="select * from signup where username='$sellername';"; 
                $res =  mysql_query($sql);
                $row=  mysql_fetch_array($res);
                     $room=$row['room'];
                     $email=$row['email'];
                     $fname=$row['fname'];
                     $mname=$row['mname'];
                     $lname=$row['lname'];

                     $phone=$row['phone'];
                echo "<form method='POST'>";
                echo"<img src='btry.php?id=$bookname' width='100px' height='100px'/>";
                echo "<TEXTAREA rows=10 cols=50  readonly>Name:$bookname\n Description:$desc\n Category:$cat\n Sem:$sem\n Posted By:$fname $mname $lname\n Phone No.:$phone\n Email:$email\n Room No.:$room\n Price Detail:$price";
                echo"</TEXTAREA><br>";
                echo "Enter your bidding amount<input type='text' name='pricetag'/>";
                echo "<input type='submit' name='submit' value='done'/>";   
                echo "</form>";
               if(isset($_POST['submit']))
               {   
                   $bprice=$_POST['pricetag'];
                   $sql="select * from signup where username='$biddername';"; 
                   
                    $res =  mysql_query($sql);
                    if($res)
                    {
                    $row=  mysql_fetch_array($res);
                    $broom=$row['room'];
                    $bemail=$row['email'];
                    $bphone=$row['phone'];  
                    $sql="insert into bookbidder value('$biddername','$bphone','$bemail','$broom','$bookname','$sellername','$bprice');";
                    $res =  mysql_query($sql);
                    if($res)
                    {
                        header("Location: bidding.php?id=$biddername");
                    }
                    }
               }
               }

                       
       ?> 
                        
        </div> 
        
        <div class="cleaner">&nbsp;</div>
        </table>
    </div>
            </div>
    </body>
</html>