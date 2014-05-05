<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Check</title>
         <link rel="stylesheet" href="css/master_page.css" type="text/css" />
         
        <style>
         div
         {             
               border:solid;          
         }
         </style>
         
    </head>
    <body> 
        <div class='wrapper'>
        <table width='100%'>
             <tr>
                  <td >
                  <div class="logo">
                   <h1> logo</h1>
                  </div>
                  </td>
              </tr>
              <tr>
                <td>
                    <div>
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
                   echo "<h1>Welcome $username</h1><h3><a href='myprofile.php?id=$username'>Myprofile</a></h3><br>";
                   echo "</td>";
                   echo "</tr>";
                  
                  
                  
                $sql="select * from books where username='$username';";  
                $res =  mysql_query($sql);
                while($row=  mysql_fetch_array($res))
                {
                     echo "<tr>";
                    echo "<td>";
                  //  echo"<form>";
                    $array[$i]=$row['name'];
                    echo "Name:<input type='text' name='name' value='$array[$i]' readonly/><br>";
                    $i++;
                    $array[$i]=$row['image'];
                   echo "Image:<input type='text' name='img' value='$array[$i]' readonly/><br>";
                     $i++;
                    $array[$i]=$row['description'];  
                    echo "Description:<TEXTAREA name='description' rows=5 cols=30 >$array[$i]</TEXTAREA><br>";
                    $i++;
                  
                   // echo"</form>";
                    echo "</td>";
                   echo "</tr>";
                    
                 
                       
              }
              echo "</table>";
              
               if(isset($_POST['submit']))
                {
                 
                  $name=$_POST['book_name'];
                  if($name=="")
                  {
                            echo "<script type='text/javascript'>"; 
                            echo "alert('Do not leave book name field blank!!')"; 
                            echo "</script>";    
                  }
                 else {
                  $sql="delete from books where name='$name';";  
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
                            $count--;
                            $itemno=(string)$count;
                            $sql2="update signup set itemno='$itemno' where username='$username';";  
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
                 }
                 else
                 {
                     echo mysql_error();
                 }
                }      
                }      
       ?>    
                        </div>
        
                  </td>
              </tr> 
              <tr>
                <td>
                    <div>  <form method="POST">
                         Enter the name book to remove from sale:<input type='text' name='book_name' /><br>
                         <input type='submit' name='submit' value='DELETE'/><br>
                     </form>
                     </div>
               </td>
              </tr>
              </table> 
          </div>   
    </body>
</html>