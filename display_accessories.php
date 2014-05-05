<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Accessories View for User</title>
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
                     // echo "<h3>Welcome ".ucfirst($username)."</h3><br>";
                      ?>
                      <form method="POST">
                      <h5> Sort by Price</h5>
                    <h5>Select Categories <select  name="price_type" >
                              <option value="Low">Low to High</option>
                              <option value="High">High to Low</option>
                       </select> </h5>   
                 
                 
                    <h5> Sort by Categories</h5>
                    <h5>Select Categories <select  name="access_cat" >                              
                            <option value="Others">Others</option>
                              <option value="Electronic">Electronic</option>
                              
                                          </select> </h5>
             
                    <input type='submit' name='submit' value='Sort And Display'/><br>
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
                    if($_POST['access_cat']=="Others")
                    {
                        $sql="select * from accessories where category='Others' order by price asc;"; 
                    }
                    else if($_POST['access_cat']=="Electronic")
                    {
                        $sql="select * from accessories where category='Electronic' order by price asc;";
                    }
                }
                else if($_POST['price_type']=="High")
                {                    
                        if($_POST['access_cat']=="Others")
                    {
                        $sql="select * from accessories where category='Others' order by price desc;"; 
                    }
                    else if($_POST['access_cat']=="Electronic")
                    {
                        $sql="select * from accessories where category='Electronic' order by price desc;";
                    }
                } 
                
                
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    echo "<div>";
                     echo "<tr>";
                    echo "<td>";
                     $array[$i]=$row['name'];
                     echo "<form method='POST'>";
                  echo "<a href='accessory_view.php?id=$array[$i]&amp;username=$username'>";
                    
                     echo"<img src='atry.php?id=$array[$i]' width='100px' height='100px'/>";
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
                  echo"</form>";
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