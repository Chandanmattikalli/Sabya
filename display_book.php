<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bidding</title>
         <link rel="stylesheet" href="css/master_page.css" type="text/css" />
        <meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
       <meta name="description" content="Hangout Freaks - " />
       <link href="templatemo_style1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="style_login1.css" />
        
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
                $username=$_REQUEST['id'];
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
                      $username=$_REQUEST['id'];
                      //echo "<h3>Welcome ".ucfirst($username)."</h3><br>";
                      ?>
                      <form method="POST">
                      <h5> Sort by Price</h5>
                    <h5>Select Categories <select  name="price_type" >
                              <option value="Low">Low to High</option>
                              <option value="High">High to Low</option>
                       </select> </h5>   
                 
                 
                    <h5> Sort by Categories</h5>
                    <h5>Select Categories <select  name="book_cat" >                              
                              <option value="Course">Course Books</option>
                              <option value="story">Story books</option>
                              <option value="story">Exam books</option>
                                          </select> </h5> 
                    <h5> Sort by Sem</h5>
                    <h5>Select Sem<select  name="sem">
                              <option value="1">1st</option>
                              <option value="2">2nd</option>
                              <option value="3">3rd</option>
                              <option value="4">4th</option>
                              <option value="5">5th</option>
                              <option value="6">6th</option>       
                              <option value="7">7th</option>
                              <option value="8">8th</option>
                         </select>
                          </h5><h6><font color="red">* Ignore this field other than course book </font></h6><br>
                    <input type='submit' name='submit' value='Sort And Display'/><br><br><br>
                      </form>
                  
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
                
               if(isset($_POST['submit']))
                {   
                           
                echo"<table> ";
                if($_POST['price_type']=="Low" )
                {
                    if($_POST['book_cat']=="Course")
                    { 
                        
                        
                        
                        $sem=$_POST['sem'];
                        $sql="select * from books where category='Course' and sem='$sem' order by price asc;"; 
                    } 
                    else
                    {
                         
                         $cat=$_POST['book_cat'];
                         $sql="select * from books where =$cat  order by price asc;";
                    } 
                }
                else if($_POST['price_type']=="High")
                {
                    if($_POST['book_cat']=="Course")
                    {
                          
                        $sem=$_POST['sem'];
                        $sql="select * from books where category='Course' and sem='$sem' order by price desc;"; 
                    } 
                    else
                    {
                          
                     $cat=$_POST['book_cat'];
                         $sql="select * from books where =$cat order by price desc;";
                    }
                }
                
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    echo "<div>";
                     echo "<tr>";
                    echo "<td>";
                     $array[$i]=$row['name'];
                  echo "<a href='book_view.php?id=$array[$i]&amp;username=$username'>";
                    
                    echo"<img src='btry.php?id=$array[$i]' width='100px' height='100px'/>";
                    echo "<TEXTAREA rows=5 cols=30  readonly>$array[$i]\n";
                    $i++;
                    
                    
                    
                    $array[$i]=$row['description'];  
                    echo"$array[$i]\n";
                    $i++;
                    
                     $array[$i]=$row['price'];  
                    echo"Price: $array[$i]\n";
                    
                    $array[$i]=$row['username'];  
                    echo"Posted by $array[$i]\n";
                    
                    
                    $i++;
                    
                    
                  echo"</TEXTAREA><br>";
                 
                  echo"</a>";     
                   echo "<br>";
                   echo "<br>"; 
                   echo "</div>";    
                   echo "</td>";
                   echo "</tr>";
                  
                    
                 
                       
              }
              echo "</table>";
                 }      
       ?>    
                 
    </div>
        
        <div class="cleaner">&nbsp;</div>
        </table>
    </div>
            </div>
    </body>
</html>