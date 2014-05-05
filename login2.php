

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Login</title>
<meta name="keywords" content=", Hangout Freaks , website templates, CSS, HTML" />
<meta name="description" content="Hangout Freaks - " />
<link href="templatemo_style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style_login.css" />
</head>
<body>
           <?php       
            if(isset($_POST['sign_in']))
            {   
                $flag=0;
                $username=$_POST['username'];
                $pwd=$_POST['pwd'];
                
                if($username=="" ||$pwd=="" )
                {
                      echo "<script type='text/javascript'>"; 
                     echo "alert('Please do not leave any field blank!!')"; 
                     echo "</script>";
                }
                else
                {
                $con= mysql_connect("localhost","root","root");
                if(!$con)
                {
                    die('could not connect:'.mysql_error());
                }
                mysql_select_db("wtopen",$con) or die(" Cannot select db");  
                $sql="select pwd from signup where username='$username';";  
                $res=  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                    if($row['pwd']==$pwd)
                    {
                        $flag=1;
                        break;
                    }
                }
                if($flag==1)
                {
                   header("Location:discussion1.php?id=$username");
                }
                else
                {
                     echo "<script type='text/javascript'>"; 
                     echo "alert('Username Password mismatch!!')"; 
                     echo "</script>";
                }
                }               
            }//main if
            if(isset($_POST['cancel']))
            {
                header("Location: home.php");
            }
       ?> 
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
               
            <li><a href="home.php" >Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>                    
        </ul> 
        
            <div id="templatemo_content_left">
                <div class="cleaner_with_height">&nbsp;</div>
                <div class="cleaner_with_height">&nbsp;</div>
                
                <div class="container">
                <section id="content">
		<form method="POST">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" name="username" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" name="pwd" id="password" />
			</div>
			<div>
				<input type="submit" value="Sign In" name="sign_in"  />
				<input type="submit" name="cancel" value="Cancel" >
				<a href="signup.php">New User?Register</a>
			</div>
		</form><!-- form -->
	</section><!-- content -->
            </div><!-- container -->
             
        </div>
        </div> 
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
</body>
</html>