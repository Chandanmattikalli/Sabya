<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sell Accessories</title>
         <link rel="stylesheet" href="css/master_page.css" type="text/css" />
        <meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
<meta name="description" content="Hangout Freaks - " />
<link href="templatemo_style2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style_login1.css" />
            
    </head>
    <body> 
       <?php 
            $username=$_REQUEST['id'];
           
            if(isset($_POST['submit']))
            {   
                 $cat=$_POST['cat'];
                $name=$_POST['name'];
               
                $desc=$_POST['desc'];
                $price=$_POST['price'];
                $cat=$_POST['cat'];
                if($name=="" || $desc=="")
                {
                            echo "<script type='text/javascript'>"; 
                            echo "alert('Do not leave any fields blank!!')"; 
                            echo "</script>";    
                }
                else
                {
                $con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                $count=0;
                mysql_select_db("wtopen",$con) or die(" Cannot select db");  
                
                
                 foreach ($_FILES["pictures"]["error"] as $key => $error)
                                                                 { //used for multiple uploads
                       
	                                                              if($error == UPLOAD_ERR_OK) 
                                                                      {
	                                                              $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
                                                                      
                                                                      }
	                                                        }

	//echo "\n<br>Temp File Name: $tmp_name";
                                                            	$size = getimagesize($tmp_name);

	                                                        $width = $size[0]; // get width of the image
	                                                        $height = $size[1]; //get height of the image
                                                          	$type = $size[2]; //get type of the image
	                                                        $mime_type = $size['mime']; //get MIME of the image

                                                                  if(!$data = addslashes(@fread(@fopen($tmp_name, "r"), @filesize($tmp_name))))
                                                                  {
                                                        		die("\n<BR>Cannot read temp file: $tmp_file");
                                                                	}
             $sql="insert into accessories values('$name','$desc','$username','$cat','$price','$width','$height','$mime_type','$data');";
                $res=  mysql_query($sql);
                if($res)
                {
                       $sql1="select itemno from signup where username='$username';";  
                       $res1=  mysql_query($sql1);
                       while($row = mysql_fetch_array($res1))
                       {
                            $count=(int)$row['itemno'];    
                       }
                       if($res1)
                       {
                            $count++;
                            $sql2="update signup set itemno='$count' where username='$username';";  
                            $res2=  mysql_query($sql2);
                            if($res2)
                            {
                                 header("Location: myprofile.php?id=$username");
                            }
                            else
                            {
                                echo "Item number is not updated";
                            }
                       }
                       else
                       {
                           echo "Error in selecting the item number";
                       }
                }
                else
                {
                     echo "Could not put your Accessories for auction";
                }
                }
            
            }//main if
            
            if(isset($_POST['cancel']))
            {
               header("Location: myprofile.php?id=$username");
            }
       ?>  
      <div id="templatemo_container">
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
                <div class="cleaner_with_height">&nbsp;</div>
                
                <div class="container">
               
                          <form  name="test" method="POST" enctype="multipart/form-data">  
                              <div class='box'>
                          <h3><font color="white">Select Category</font><select  name="cat" onchange="category(this)" >
                              <option value="Others">Others</option>    
                              <option value="Electronic">Electronic</option>
                        
                           </select> </h3>  
                            
                         <h3><font color="white"> Name</font><input type="text" name="name" placeholder="eg.bed,coil" size="30"></h3>     
                          <h3><font color="white">Upload Image</font><input type="file" name="pictures[]" /></h3>
                         <h3></font><TEXTAREA Name="desc" ROWS=5 COLS=30 placeholder="Description.<br>Write 2-3 lines about your product"></TEXTAREA></h3>
                         <h3><font color="white">Price</font><input type="text" name="price" placeholder="Free"></h3>
                          <input type="submit" name="submit" value="Submit" >
                          <input type="submit" name="cancel" value="Cancel" >
                              </div>
                          </form>
            </div><!-- container -->
             
        </div>
        </div> 
        
        <div class="cleaner">&nbsp;</div>
    </div>
  </div>
    </body>
</html>