


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shotcut icon" href="images/logo.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Most Liked Restaurants</title>

<link rel="stylesheet" href="style.css" type="text/css" />

<body>
    <div class='wrapper'>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39029655-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link rel="stylesheet" type="text/css" href="css/general.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />

<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script language="javascript" type="text/javascript" src="js/popup.js"></script>
<!------------------style and script for dropdown list end------>

<style type="text/css">





h1 { text-align: center; padding: 0 0 0.25em 0; margin: 0; }
ul { list-style: none; padding: 0; margin: 0;  margin-top:20px; margin-left:-50px; }
#drop a { font-weight: bold; color:#800000 ; }
#drop a { text-decoration: none;  }
#drop li li a { display: block; font-weight: normal; color: white; padding: 0.2em 10px; }
#drop li li a:hover { padding: 0.2em 5px; border: 5px solid #7d6340; border-width: 0 5px; }
#drop li { float: left; position: relative; width: 10em; text-align: left; cursor: default;  }
li ul { display: none; position: absolute; top: 100%;font-weight: normal; background: #800000; 	padding: 0.5em 0 1em 0;}
li>ul { top: auto; margin-top:0.1px; }
#drop li li { display: block; float: none; background-color: transparent; border: 0; text-align:center;}
#drop li:hover ul, li.over ul { display: block; }

</style>



<script type="text/javascript"><!--

startList = function() {
	if (document.all&&document.getElementById) {
		navRoot = document.getElementById("nav");
		for (i=0; i<navRoot.childNodes.length; i++) {
			node = navRoot.childNodes[i];
			if (node.nodeName=="LI") {
				node.onmouseover=function() {
					this.className+=" over";
				}
				node.onmouseout=function() {
					this.className=this.className.replace(" over", "");
				}
			}
		}
	}
}
window.onload=startList;

//--></script>
<script type="text/javascript">


function call_popup()
{
        disableLoginPopup();
   		centerPopup();
		//load popup
		loadPopup();
}

function call_login_popup()
{
	/*$("#popupContact").fadeOut("slow");*/
	disablePopup();
	loginPopup();
	loadloginPopup();
}

function disable_login_popup()
{
/*$("#login_popup").fadeOut("slow");*/
   disableLoginPopup();
}


function call_login()
{

    var user_name = document.getElementById("user_name").value;
	 var pass_word = document.getElementById("pass_word").value;
	 
	 if(user_name == "")
	{
	   alert("Please Enter User Name");
	    document.getElementById("user_name").focus();
	   return false;
	}
	if(pass_word == "")
	{
	   alert("Please Enter Password");
	    document.getElementById("pass_word").focus();
	   return false;
	}
	
	if (window.XMLHttpRequest)
	{
	  	xmlhttp1=new XMLHttpRequest();
	}
	else
  	{// code for IE6, IE5
  		xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp1.onreadystatechange=function()
  	{
	  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
		{
		   
				if(xmlhttp1.responseText == 0)
				{
				   alert("Invalid Login Details");
				   
				}
				else if(xmlhttp1.responseText > 1)
				{
				 		 /*alert("User Registered Sucessfully");*/
				  		 document.location.href = "restaurants.php";
				}
				 /*document.getElementById("div_city").innerHTML = xmlhttp.responseText;*/
		}
  	}
	/*alert("ajax/ajax_user_login.php?user_name="+user_name+"&pass_word="+pass_word);*/
	xmlhttp1.open("GET","ajax/ajax_user_login.php?user_name="+user_name+"&pass_word="+pass_word,true);
	xmlhttp1.send();
}


function validate()
{

  var first_name 	= document.getElementById("first_name").value;
 	
  var	email       = document.getElementById("email").value;
 
  var	reg_city_id = document.getElementById("location_id").value;
  
  var	user_id 	= document.getElementById("user_id").value;
  var	pwd 		= document.getElementById("pwd").value;
  var	confirm_pwd = document.getElementById("confirm_pwd").value;
  var upload_image="pro.jpg"
  var namePat=/^[A-Z a-z]{6,25}$/;
  

  if(first_name == "")
	{
	   alert("Please Enter First Name");
	   document.getElementById("first_name").focus();
	   return false;
	}
	
	
	
	if(!namePat.test(first_name))
	{
	
	alert("Enter Minimum 6 Characters");
	return false;
	}
  
    if(document.getElementById("email").value == "")
	{
	   alert("Please Enter Email ID");
	   document.getElementById("email").focus();
	   return false;
	}
	
	var reg = /^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$/;
	if(reg.test(email) == false)
	{
	alert("Enter Valid Email");
	return false;
	}
if(user_id == "")
	{
	   alert("Please Enter User ID");
	    document.getElementById("user_id").focus();
	   return false;
	}
	if(pwd == "")
	{
	   alert("Please Enter Password");
	    document.getElementById("pwd").focus();
	   return false;
	}
	if(confirm_pwd == "")
	{
	   alert("Please Confirm Passowrd");
	    document.getElementById("confirm_pwd").focus();
	   return false;
	}
	
	if(pwd != confirm_pwd)
	{
		alert("Please Confirm the Password Correctly");
		document.getElementById("confirm_pwd").focus();
	   return false;
	}
	
	if (window.XMLHttpRequest)
	{
	  	xmlhttp1=new XMLHttpRequest();
	}
	else
  	{// code for IE6, IE5
  		xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp1.onreadystatechange=function()
  	{
	  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
		{
		   /* alert(xmlhttp1.responseText);*/
				if(xmlhttp1.responseText == 0)
				{
				   alert("User ID Already Exists");
				   
				}
				else if(xmlhttp1.responseText == 1)
				{
				 		 alert("User Registered Sucessfully");
				  		 document.location.href = "restaurants.php";
				}
				 /*document.getElementById("div_city").innerHTML = xmlhttp.responseText;*/
		}
  	}
/*alert("ajax/ajax_add_user.php?first_name="+first_name+"&last_name="+last_name+"&mobile="+mobile+"&email="+email+"&state_id="+state_id+"&city_id="+city_id+"&address="+address+"&pin="+pin+"&reg_city_id="+reg_city_id+"&user_id="+user_id+"&pwd="+pwd+"&confirm_pwd="+confirm_pwd);*/
		
	xmlhttp1.open("GET","ajax/ajax_add_user.php?first_name="+first_name+"&email="+email+"&reg_city_id="+reg_city_id+"&user_id="+user_id+"&pwd="+pwd+"&confirm_pwd="+confirm_pwd+"&upload_image="+upload_image,true);
	xmlhttp1.send();
}

</script>

<!------------------style and script for dropdown list------>

<!---style for select box--------->
<style>
.styled-select {
width: 160px;
height: 34px;
overflow: hidden;

border-radius: 10px;
}
.styled-select select {

width: 160px;
padding: 5px;
border: 1px solid #CCC;
font-size: 16px;
height: 34px;
font-weight: bold;
outline:0px;
-webkit-appearance: none;
border-radius: 10px;
}
.styled-select option {
background: lightgrey;

border: 0px solid #CCC;
font-size: 12px;
height: 25px;
outline:0px;

}
</style>
<!---style for select box end--------->

<script type="text/javascript">
function get_location(id)
{
   document.location.href = 'restaurants.php?city_id='+id;
}
</script>

<div class="header"><!--header---->
	<div class="header_outline"><!--outline-->
		<div class="header_logo"><a href="restaurants.php?city_id=13"><img src="images/logo.png" width="314" height="109" border="0" /></a></div>
		<!------Sel start----><div class="header_selection_bx"><div align="center" style="margin-top:20px; border:0px solid #000000">
			<div class="styled-select"><select name="location_id" id="location_id" onchange="get_location(this.value)">
	
		<option value="13"  selected=selected>Hubli</option>
		</select></div>
		</div></div>
		
		<div class="header_loginbx">
		  			<div class="header_user"></div>
			<div class="header_agent"></div>	 
						
		</div>
		<!----------sel end--------->
		<!--<div><div id="selection_box">selection</div></div>-->
		<div class="phone_no"></div>
  </div><!--outline-->


</div><!--header---->

<div id="popupContact">
		
		<div class="login_blk">
	<div class="login_top"></div>
	<div class="login_middle">
	<div class="login_header"><p>Registration</p></div>
		<div class="left_right" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		<form name="form1" id="form1" action="" method="post">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
		<tr>
		<td colspan="2">&nbsp;</td>
		</tr>
  <tr>
    <td>Full Name</td>
    <td><input type="text" id="first_name" name="first_name" /></td>
  </tr>
  <tr>
		<td colspan="2">&nbsp;</td>
		</tr>
  

  <tr>
    <td>Email</td>
    <td><input type="text" id="email" name="email" /></td>
  </tr>
   <tr>
		<td colspan="2">&nbsp;</td>
		</tr>
  
  <tr>
    <td>User ID</td>
    <td><input type="text" id="user_id" name="user_id" /></td>
  </tr>
   <tr>
		<td colspan="2">&nbsp;</td>
		</tr>
  <tr>
    <td>Password</td>
    <td><input type="password" id="pwd" name="pwd" /></td>
  </tr>
   <tr>
		<td colspan="2">&nbsp;</td>
		</tr>
  <tr>
    <td>Confirm Password</td>
    <td><input type="password" id="confirm_pwd" name="confirm_pwd" /></td>
  </tr>
   <tr>
		<td colspan="2">&nbsp;</td>
		</tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</form>
</div>
		
		
		
		
	
	</div>
	<div class="login_bottom"></div>

</div><!---1--->
	</div>
	<!--<div id="backgroundPopup"></div>-->
<!--pop up Ends-->

<!--Login Pop Up Starts-->
<div id="login_popup">
<div class="user_login_wrapper"><!---1--->
		<div class="user_login_top"></div>
		<div class="user_login_middle"><!---2--->
			<table width="70%" border="0" class="user_login_TBL" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>User Id :</p></td>
    <td><input type="text" id="user_name" name="user_name" /></td>
  </tr>
  <tr>
    <td><p>Password :</p></td>
    <td><input type="password" id="pass_word" name="pass_word" /></td>
  </tr>
  
  <tr>
  <td></td>
  <td></td>
   </tr>
  
  		<tr> 
      	<td></td>
		<td></td>
		</tr>
  		
		<tr> 
      	<td></td>
		<td></td>
		</tr>	
  
 		<tr> 
      	<td colspan="2"><span style="font-size:12px; padding-top:10px; color:#00FF66; font-family:Arial, Helvetica, sans-serif;">Forgotten Password<a href="#" style="color:#00FFFF; text-decoration:none;"> Click Here !</a></span></td>
    	</tr>
</table>

		
		</div><!---2--->
		<div class="user_login_bottom"></div>
	
	
	
	
	
	</div><!---1--->
	</div>
<!--Login Pop Up Ends-->

<!--<script type="text/javascript">

</script>--><!------------------------------------------------>
<div class="contents">
	<div class="left"><!---left------>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" width="22"></td>
    <td align="left" valign="top" class="traffic_top_centerr"><div class="restarant_heading"><h1></h1></div>
									
    <td align="right" valign="top" width="22"></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="traffic_middle_left"></td>
    <td align="left" valign="top">
<!----------------------------------------------Restaurant_in hubli-------------------------------------------------------------------------------------->	
	<div class="restaurants"><!--restaurants-->
		
		     
			 
					 <table border="0"  align="center"  width="100%" cellpadding="50" class="restaurants_tbl">
</tr><tr>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#1</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/hans.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_hans.php">The HANS Hotel</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">13&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">5&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(14,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_hans.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#2</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/olive.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_olive.php">Hotel Metropolis</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">6&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">4&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(22,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_olive.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td></tr><tr>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#3</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/dominoes.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_dominoes.php">Domino's PIZZA</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">6&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">0&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(15,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_dominoes.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#4</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/niyaz.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_niyaz.php">Niyaz</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">4&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">2&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(16,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_niyaz.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td></tr><tr>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#5</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/almadina.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_almadin.php">AL Madina</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">2&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">2&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(37,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_almadin.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#6</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/kfc.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_kfc.php">KFC</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">2&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">1&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(21,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_kfc.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td></tr><tr>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#7</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/smokin.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_smokin.php">Smokin Joe's</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">2&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">2&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(19,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_smokin.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#8</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/ccd.jpg" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_ccd.php">Cafe Coffee Day</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">1&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">0&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(20,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_ccd.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td></tr><tr>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#9</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/seven.JPG" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_seven.php">Seven Beans</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">1&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">0&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(17,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_seven.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td>	<td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="8" >
  	<tr>
	<td><span style="font-size:18px;font-weight:bold;">#10</span></td>
    <td rowspan="4" align="left"  width="96"><img src="images/chickbytes.png" width="85" height="85" border="0" /></td>
    <td align="left" valign="top" width="15%"><img src="images/hotel_icon.png" width="25" height="29" border="0" /></td>
    <td align="left" ><span style="color:#6600CC; font-weight:bold; font-size:14px; margin-top:-10px; text-decoration:none; float:left; width:70px;"><a href="details_chickbytes.php">ChickBytes</a></span></td>
  	</tr>
  	<tr>
	<td>&nbsp;</td>
    <td align="left" valign="top" width="15%" style="margin-top:-8px; float:left;"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td><span style=" float:left; margin-top:-6px; ">1&nbsp;Like</span> </td>
  	</tr>
  	<tr>
		<td>&nbsp;</td>
    <td align="left" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td><span style="margin-top:-9px; float:left;">0&nbsp;Review</span></td>
  	<tr>
	<tr>
    <td colspan="4" align="right" ><div style='cursor:pointer;'><span style='float:left; margin-left:118px;'><a href='#' onclick='hotel_like(26,,13)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></span></div><span style="float:left; margin-left:177px; margin-top:-22px;"><a href="details_chickbytes.php"><img src="images/order_now_btn.png" width="89" height="22" border="0" /></a></span></td>
    </tr>	
		<tr>
<!--	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>
	<td><div id="spl"></div></td>	-->
	</tr>
	
	</table></td></tr></table>
	</div><!----2---->
<!----------------------------------------------Restaurant_in hubli-------------------------------------------------------------------------------------->
	</td>
    <td align="right" valign="top" class="traffic_middle_right"></td>
  	</tr>
  	<tr>
    <td align="left" valign="top" width="22"></td>
    <td align="left" valign="top"><div class="traffic_bottom_middle"></div></td>
    <td align="right" valign="top" width="22"></td>
  	</tr>
	</table>

	</div><!---left------>

	<div class="right"><!---right------>
	</div><!---right------>


<!----------------------------------------------------------------------------------------------------------------------------------------->
</div>



<div class="footer"><!---footer---->
	<div class="footer_menu_bg"><!---footer_menu_bg---->
		<div class="footer_menu_1">
			<ul>
			<li><a href="login2.php"><img src="images/footer_blog_icon.png" width="25" height="25" border="0" hspace="15" />FEEDBACK</a></li>
			<li><a href="aboutus.php"><img src="images/abt-icon.png" width="23" height="22" border="0" hspace="15"  />ABOUT US </a></li>
			<li><a href="home.php"><img src="images/privacy-con.png" width="23" height="22" border="0" hspace="15"  />HOME</a></li>
			</ul>
		</div>
		<div class="footer_menu_2">
			<ul>
			<li><a href="help.php"><img src="images/help-icon.png" width="23" height="22" border="0" hspace="15"  />HELP</a></li>
			
			</ul>
		
		</div>
		<div class="footer_menu_3">
			<div class="footer_menu_3_addr">
				<h3>Connect With Us On:</h3>
				<h3><a href="" target="_blank"><img src="images/facebook.png" width="75" height="75" border="0" align="top" hspace="5"/></a><a href="" target="_blank"><img src="images/twitter.png" width="75" height="75" border="0" hspace="5 /></a><a href="facebook.com"><img src="images/youtube.png" width="75" height="75" border="0" hspace="5" /></a></h3> 	 
			
			</div>
			<div class="footer_menu_3_copyright"><p> All rights reserved 2013-14.</p></div>
		
		</div>
	
	</div><!---footer_menu_bg---->

</div><!---footer---->
</body>
</html>
