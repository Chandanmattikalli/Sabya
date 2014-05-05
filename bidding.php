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
                          <?php $username=$_REQUEST['id'] ;
                           echo"<h2><font size='3' color='#be457c'>Categories</font></h2><br>";
                           echo"<div class='product_box'>";
                            echo"<h3 align='center'>Books</h3>";
                            echo"<a href='display_book.php?id=$username'><img src='images/buks.png' height='190' width='200' alt='image'/></a>";
                            echo"</div>";
                            
                            echo"<div class='product_box'>";
                            echo"<h3 align='center'>Accessories</h3>";
                            echo"<a href='display_accessories.php?id=$username'><img src='images/acc.png' height='190' width='200' alt='image'/></a>";
                            echo"</div>";
                          
                           ?>
                      </div>
                    
                  </td>
                  <td colspan="5">
                      <div class ="Bidding_img">
                          <h2></h2><br>
                      </div>
                  </td>
              </tr>
          
          </table>      
      </div>                
      </div>
    </body>
</html>
