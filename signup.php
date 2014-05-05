<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign Up</title>
        <meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
<meta name="description" content="Hangout Freaks - " />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style_signup.css" />
    </head>
    <body> 
       <?php
            if(isset($_POST['submit']))
            {
                $flag=0;
                $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
                $room=$_POST['room'];
                $phone=$_POST['phone'];
                $sem=$_POST['sem'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $pwd=$_POST['pwd'];
                $cpwd=$_POST['cpwd'];
               // $image=$_POST['image'];
                
                
                
                $reg_fname="/^[a-zA-Z]+$/";
                $reg_mname="/^[a-zA-Z]+$/";
                $reg_lname="/^[a-zA-Z]+$/";
                $reg_room="/^[a-zA-Z]{1,2}-[0-9]{1,3}$/";
                $reg_phone="/^[0-9]{10}$/";
                $reg_email="/^[a-zA-Z0-9]+([\._][a-zA-Z0-9])*@[A-Za-z](.[a-zA-Z])*$/";
                $reg_username="/^[a-zA-Z0-9]+$/";
                $reg_pwd="/^[0-9A-Za-z]{6,10}$/";
            
            if($pwd!=$cpwd && empty($_POST['pwd']))
            {
                            echo "<script type='text/javascript'>"; 
                            echo "alert('password mismatched')"; 
                            echo "</script>"; 
            }
             else
             {
                    if (empty($_POST['fname'])||empty($_POST['mname'])||empty($_POST['lname'])||empty($_POST['room'])||empty($_POST['phone']))
                    {
                        
                            echo "<script type='text/javascript'>"; 
                            echo "alert('Do not leave the * fields blank')"; 
                            echo "</script>"; 
                        
                    }
                    else 
                    {
                        if (preg_match($reg_fname, $fname))
                        {
                            if (preg_match($reg_mname, $mname))
                            {
                                    if (preg_match($reg_lname, $lname))
                                    {
                                        if (preg_match($reg_room, $room))
                                        {
                                            if (preg_match($reg_phone, $phone))
                                            {
                                               if (preg_match($reg_email, $email))
                                                {
                                                    if (preg_match($reg_username, $username))
                                                    {
                                                        if (preg_match($reg_pwd, $pwd))
                                                        {
                                                            $con= mysql_connect("localhost","root","root");
                                                            if(!$con)
                                                            {
                                                                die('could not connect:'.mysql_error());
                                                            }
                                                            mysql_select_db("wtopen",$con) or die(" Cannot select db");
                                            
                                                            /*$tmpName=$_POST['pictures'];
                                                            $fp = fopen($tmpName, 'r');
                                                            echo"file opened";
                                                            $image = fread($fp, filesize($tmpName));
                                                            echo"file read";
                                                            $image = base64_encode($image);
                                                            //$data = addslashes($data);
                                                           fclose($fp);
                                                            */
                                                            $sql1="select username from signup;";  
                                                            $res=  mysql_query($sql1);
                                                            while($row=  mysql_fetch_array($res))
                                                            {
                                                                 if($row['username']==$username)
                                                                {
                                                                    $flag=1;
                                                                    break;
                                                                }
                                                            }
                                                            if($flag==0)
                                                            {
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
        

                                                                    $sql="insert into signup values('$fname','$mname','$lname','$room','$sem','$phone','$email','$username','$pwd','0','$width', '$height','$mime_type','$data');";                                                    
                                                                    if (mysql_query($sql))
                                                                    {
                                                                        header("Location: myprofile.php?id=$username");
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "Error <br/>.".mysql_error();
                                                                    }
                                                            }
                                                            else
                                                            {
                                                                   
                                                                     echo "<script type='text/javascript'>"; 
                                                                     echo "alert('Username already existing')"; 
                                                                     echo "</script>"; 
                                                            }
                                                           
                                                              }
                                                           
                                                        //}
                                                    //}
                                                        
                                                        else
                                                        {
                                                            echo "<script type='text/javascript'>"; 
                                                            echo "alert('$pwd not a valid password')"; 
                                                            echo "</script>"; 
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "<script type='text/javascript'>"; 
                                                        echo "alert('$username not a valid username')"; 
                                                        echo "</script>"; 
                                                    }
                                                }
                                                else
                                                {
                                                      echo "<script type='text/javascript'>"; 
                                                      echo "alert('$email not a valid email address')"; 
                                                      echo "</script>"; 
                                                }
                                            }
                                            else
                                            {
                                                echo "<script type='text/javascript'>"; 
                                                echo "alert('$phone not a valid phone number')"; 
                                                echo "</script>"; 
                                                
                                            }
                                        }
                                        else
                                        {
                                            
                                             echo "<script type='text/javascript'>"; 
                                             echo "alert('$room not a valid room number')"; 
                                             echo "</script>"; 
                                 
                                             
                                         }
                                    }
                                    else
                                    {
                                       
                                        echo "<script type='text/javascript'>"; 
                                        echo "alert('$lname is not a valid last name')"; 
                                        echo "</script>"; 
                                 
                                    }
                            }
                            else
                            {
                                 echo "<script type='text/javascript'>"; 
                                 echo "alert('$mname is not a valid middle name')"; 
                                 echo "</script>"; 
                                 
                            }
                        }
                        else
                        {
                            echo "<script type='text/javascript'>"; 
                            echo "alert('$fname is not a valid first name')"; 
                            echo "</script>"; 
                             
                        }
                    }
             }
            }//main if
            if(isset($_POST['cancel']))
            {
                header("Location: login1.php");
            }
       ?>   
         <div id="templatemo_container">

    <div id="templatemo_banner">
    <img src="images/logo.png"  alt="LOGO " title="Hostel Needs" border="0" height="200" width="900"/> 	
    </div>
     <div class='wrapper'>
     <div id="templatemo_content">
        <h2><font size="3" >Delivering Happiness</font></h2>
            <div id="templatemo_content_left">
                <div class="cleaner_with_height">&nbsp;</div>
                
                
                <div class="container">
                <section id="content">
      
                          <form  name="test" method="POST" enctype="multipart/form-data">
                              <h5> <font color="red"> *Do not leave any star fields blank </font> </h5>
                          <h3><font color="red"></font><input type="text" name="fname" placeholder="First Name *"></h3>
                          <h3><font color="red"></font><input type="text" name="mname" placeholder="Middle Name"></h3>
                          <h3><font color="red"></font><input type="text" name="lname" placeholder="Last Name *"></h3>
                          <div><font color="red"></font><input type="text" name="room" placeholder="Room No.* eg.TA-309"></div>
                          <h3>Semester<select  name="sem" >
                              <option value="1">1st</option>
                              <option value="2">2nd</option>
                              <option value="3">3rd</option>
                              <option value="4">4th</option>
                              <option value="5">5th</option>
                              <option value="6">6th</option>       
                              <option value="7">7th</option>
                              <option value="8">8th</option>
                           </select> </h3>
                          
                          <h3><font color="red"></font><input type="text" name="phone" placeholder="Phone No. *"></h3>
                          <h3><input type="text" name="email" placeholder="Email myemail@some.com"></h3>          
                          <h3>Upload Image<input type="file" name="pictures[]" /></h3>
                          <h3><font color="red"></font><input type="text" name="username" placeholder="Username *"></h3>
                          <h3><font color="red"></font><input type="password" name="pwd" placeholder="Password"></h3>
                          <h3><font color="red"></font><input type="password" name="cpwd" placeholder="Confirm Password" title="*Password must be between 6 to 10 character and can contain letters and digit"></h3>
                          <input type="submit" name="submit" value="Submit" >
                          <input type="submit" name="cancel" value="Cancel" >
                          
                          </form>
                    </section><!-- content -->
            
             
        </div>
                
        
        
        <div class="cleaner">&nbsp;</div>
       
        </div> 
    </div>
</div>
              </div><!-- container -->
    </body>
</html>