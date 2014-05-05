

<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link rel="stylesheet" type="text/css" href="css/general.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
<link rel="stylesheet" type="text/css" href="css/domtab.css" />

<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script language="javascript" type="text/javascript" src="js/popup.js"></script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
		@import "testt.css";
	</style>

	<script type="text/javascript" src="domtab.js"></script>
	<script type="text/javascript">
		document.write('<style type="text/css">');    
		document.write('div.domtab div{display:none;}<');
		document.write('/s'+'tyle>');    
    </script>
<link rel="shotcut icon" href="images/G_logo.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Restaurants Details</title>
<link rel="stylesheet" href="css/new_style2.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/tab.css" type="text/css" />
<link rel="stylesheet" href="css/cart.css" type="text/css" />
<script language="javascript" src="js2/jquery.min.js"></script>
<link href="carasole.css" rel="stylesheet" type="text/css">
<script src="js2/jquery-1.js" type="text/javascript"></script>
<script src="js2/jquery-ui-1.js" type="text/javascript"></script>
<script src="js2/jquery.js" type="text/javascript"></script>
<script src="js2/allinone_carousel.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".tab_content").hide(); 
		$("ul.tabs li:first").addClass("active").show();
		$(".tab_content:first").show(); 
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active");
			$(this).addClass("active");
			$(".tab_content").hide();
			var activeTab = $(this).find("a").attr("href");
			$(activeTab).fadeIn(500); 
			//$(activeTab).animate({ opacity:'toggle',height:'toggle'},1000); //Fade in the active content
			return false;
		});
		
		
	});
</script>
<script>
		$(function() {

			$('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 1090,
				height: 404,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				
				//easing:'easeOutBounce',
				numberOfVisibleItems:5
			});		
			
			

		});
	</script>

<script type="text/javascript">
function U_like(u_id,l_id,c_id)
{
		/*alert(u_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					/* alert(xmlhttp.responseText);*/
				document.location.href = "restaurant_details.php?hotel_id="+c_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/User_like.php?user_id="+u_id+"&l_id="+l_id,true);
		xmlhttp.send();
}


 function U_unlike(u_id,l_id,c_id)
{
		/*alert(u_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					/* alert(xmlhttp.responseText)*/;
					document.location.href = "restaurant_details.php?hotel_id="+c_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/User_unlike.php?user_id="+u_id+"&l_id="+l_id,true);
		xmlhttp.send();
}

function Submit_rev(h_id,l_id)
{
var rew=document.getElementById("review").value;

		/*alert(h_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					/* alert(xmlhttp.responseText);*/
					document.location.href = "restaurant_details.php?hotel_id="+h_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/hotel_review.php?hotel_id="+h_id+"&l_id="+l_id+"&review="+rew,true);
		xmlhttp.send();
}


 function hotel_like(h_id,l_id)
{
	/*alert(h_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					 /*alert(xmlhttp.responseText);*/
					document.location.href = "restaurant_details.php?hotel_id="+h_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/hotel_like.php?hotel_id="+h_id+"&l_id="+l_id,true);
		xmlhttp.send();
}

function hotel_unlike(h_id,l_id)
{
	/*alert(h_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					 /*alert(xmlhttp.responseText);*/
					document.location.href = "restaurant_details.php?hotel_id="+h_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/hotel_unlike.php?hotel_id="+h_id+"&l_id="+l_id,true);
		xmlhttp.send();
}
 
  function review_like(r_id,l_id,h_id)
{
	/*alert(r_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					/* alert(xmlhttp.responseText);*/
					document.location.href = "restaurant_details.php?hotel_id="+h_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/review_like.php?review_id="+r_id+"&l_id="+l_id,true);
		xmlhttp.send();
}  

function review_unlike(r_id,l_id,h_id)
{
	/*alert(r_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					/* alert(xmlhttp.responseText);*/
					document.location.href = "restaurant_details.php?hotel_id="+h_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/review_unlike.php?review_id="+r_id+"&l_id="+l_id,true);
		xmlhttp.send();
}  

 function U_like(u_id,l_id,h_id)
{
		/*alert(u_id+"-"+l_id);*/
     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					 /*alert(xmlhttp.responseText);*/
					document.location.href = "restaurant_details.php?hotel_id="+h_id;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/User_like.php?user_id="+u_id+"&l_id="+l_id,true);
		xmlhttp.send();
} 

function call_sub_food_items(id,type,mini)
{

     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					document.getElementById("div_sub_food_items"+id).innerHTML = xmlhttp.responseText;
			}
	  }
		/*alert("ajax/ajax_sub_food_items.php?cat_id="+id+"&type="+type+"&min="+mini);*/
		xmlhttp.open("GET","ajax/ajax_sub_food_items.php?cat_id="+id+"&type="+type+"&min="+mini,true);
		xmlhttp.send();
}

function call_food_items(id,type,mini)
{

     if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
					/* alert(xmlhttp.responseText);*/
					document.getElementById("cart_desc").innerHTML = xmlhttp.responseText;
			}
	  }
		<!--alert("ajax/ajax_food_items.php?cat_id="+id+"&type="+type);-->
		xmlhttp.open("GET","ajax/ajax_food_items.php?cat_id="+id+"&type="+type+"&min="+mini,true);
		xmlhttp.send();
}

function call_cart(id,price,mini,h_id)
{
var food_item_price = parseFloat(price);
var qty =document.getElementById("quantity"+id).value;
var quantity=parseInt(qty); 

if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
			        /* alert(xmlhttp.responseText);*/
					document.getElementById("cart-info1").innerHTML = xmlhttp.responseText;
			}
			
	  }
	  
		/*alert("ajax/ajax_add_cart.php?price="+food_item_price+"&food_item_id="+id+"&quantity="+quantity);*/
		xmlhttp.open("GET","ajax/ajax_add_cart.php?price="+food_item_price+"&food_item_id="+id+"&quantity="+quantity+"&min="+mini+"&hotel_id="+h_id,true);
		xmlhttp.send();
}

function del_item(id,price,mini,h_id)
{
//var food_item_price = parseFloat(price);

//var quantity = document.getElementById("quantity").value;


if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
			         /*alert(xmlhttp.responseText);*/
					document.getElementById("cart-info1").innerHTML = xmlhttp.responseText;
			}
			
	  }
	  
		/*alert("ajax/ajax_del_item.php?price="+price+"&food_item_id="+id);*/
		xmlhttp.open("GET","ajax/ajax_del_item.php?price="+price+"&food_item_id="+id+"&min="+mini+"&hotel_id="+h_id,true);
		xmlhttp.send();
}


function place_ord(mini,subt,tax,grandt,h_id)

{
if(mini > subt)
{
alert("There should be a minimum order of RS "+ mini);
return false;
}
else
{
if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
			         document.location.href = "checkout.php?hotel_id="+h_id;
			}
			
	  }
	  
		/*alert("ajax/ajax_del_item.php?price="+price+"&food_item_id="+id);*/
		xmlhttp.open("GET","ajax/ajax_grand_total.php?subt="+subt+"&tax="+tax+"&grandt="+grandt,true);
		xmlhttp.send();

}
}

</script>

<body>
    
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
		<div class="header_logo"><a href="restaurants.php?city_id="><img src="images/logo.png" width="314" height="109" border="0" /></a></div>
		<!------Sel start----><div class="header_selection_bx"><div align="center" style="margin-top:20px; border:0px solid #000000">
			<div class="styled-select"><select name="location_id" id="location_id" onchange="get_location(this.value)">
	
		<option value="13"  selected=selected>Hubli</option>
		</select></div>
		</div></div>
	

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
    <td><a href="#" onclick="return validate();"><img src="images/register.png" width="75" height="30" /></a>&nbsp;<a href="#"  ><img src="images/cancel.png" width="75" height="30"  onclick="disablePopup()"/></a></td>
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
  <td><a href="#"><img src="images/login.png" width="64" height="27" border="0" style="padding-right:10px;" onclick="call_login()" /></a><a href="javascript:ret()"><img src="images/cancel.png" width="64"  height="27" border="0" onclick="disable_login_popup()" /></a></td>
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

</script>-->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<div class="contents"><!---content--->

<!------------------------------------------------------->
<div class="gallery_block"><!----2--->
	<div class="profile"><!---profile--->
		<table width="10%" border="0" cellspacing="11" cellpadding="5" border="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
  	<tr>
    <td rowspan="4" align="left" valign="top" width="40"><img src="images/chickbytes.png" width="194" height="195" border="0" />
	</td>
        <td></td>
	    <td align="left" valign="top"><img src="images/hotel_icon.png" width="27" height="31" border="0" /></td>
    <td><span style="color:white; font-weight:bold; font-size:18px;">ChickBytes</span></td>
 
 
   
    <td> </td> <td> </td>
    <td> </td> <td> </td><td> </td> <td> </td>
    <td> </td> <td> </td><td> </td> <td> </td>
    <td> </td> <td> </td><td> </td> <td> </td>
    <td> </td> <td> </td><td> </td> <td> </td>
   
    <td rowspan="4" align="left" valign="top" width="400"><img src="images/shef.jpg" width="250" height="230" border="0" />
	</td>
  	</tr>
  	<tr>
            <td> </td>
    <td align="left" valign="top" ><strong><font size="4"><b>Address:</b></font></strong></td>
    <td><font size="4"><b>Near AmruthaScanCentre, Vidyanagar</b></font></td>
  	</tr>
        <tr><td></td>
    <td align="left" valign="top"><strong><font size="4"><b>PhoneNo: </b></font></strong></td>
    
    <td><font size="4"><b>07899878766</b></font></td>
  	</tr>
	<tr>
    <td colspan="2" align="left"><div style='cursor:pointer;'><a href='#' onclick='hotel_like(22,,22)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></div></td>
    </tr>
</table>
</div><!---profile--->
<!------------------------------------------------------------------------------------------------------------------------>
 	
</div><!----2--->
<!------------------------------------------------------------------------------------------------------------------------>

<div class="tabs_blk" id="fix"><!---tab--->

        <div class="tab_container">
		<div style="display: none;" id="tab3" class="tab_content">
		<div style="width:1090px; height:404px; margin:10px auto 0 auto;" class="sliderBox">

<div id="carouselParent_82024" style="position: relative; width: 991px; height: 404px;"><div style="width: 990px; height: 404px; cursor: url('/&quot;skins/hand.cur&quot;'), url(&quot;skins/hand.cur&quot;), move; left: 0px; position: absolute;" class="allinone_carousel charming ui-draggable"><div id="allinone_carousel_charming">
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
				
				<br />
<b>Warning</b>:  mysql_num_rows() expects parameter 1 to be resource, boolean given in <b>/home/gogaily/public_html/restaurant_details.php</b> on line <b>838</b><br />
     
                </ul>    
                                       
                           
           </div>         
               <!------------------------------------------------------------------------------------->
            </div>    	        
        </div>
		</div>
		</div>
        </div>
		
		
		<div class="tab_container">
		<div style="display: none;" id="tab4" class="tab_content">
		No Offers Yet from Niyaz	<!--	<div style="border:1px solid #000000; width:167px; height:125px; float:left; background-image:url(images/offer-img.png); ">123</div>
		<div style="border:1px solid #000000; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; clear:both; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; clear:both; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; width:50px; height:25px; float:left;"></div>
		<div style="border:1px solid #000000; width:50px; height:25px; float:left;"></div>-->
        <!--<img src="images/offer-img.png" width="167" height="125" border="0" />
		<img src="images/offer-img.png" width="167" height="125" border="0" />
		<img src="images/offer-img.png" width="167" height="125" border="0" />-->	
		</div>
		</div>
		
		<div class="tab_container">
		<div style="display: none;" id="tab5" class="tab_content">
        <div class="desc_cart"><p style="margin-top:10px;">Niyaz Is Liked By:</p></div>
			<!----------------------------------------------------------Liked By-starts--------------------------------------------------------------------->	
			
		
	<div class="restaurants"><!--restaurants-->
	<table border="0"  align="center"  width="96" cellpadding="15">
	
  	</tr><tr>	
	<td><table width="100%" border="0" cellspacing="0" cellpadding="5" class="restaurants_tbl">
	<tr>
    <td rowspan="4" align="left" valign="top" width="96"><img src="admin/upload/abc_5514121297.jpg" width="96" height="95" border="0" /></td>
    <td align="center" valign="top" width="15%"><img src="images/name_icon.png" width="15" height="17" border="0" /></td>
    <td><span style="color:#6600CC; font-weight:bold;"><a href="profile.php?user_id=51">Ramkrishna</a></span></td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td>3&nbsp;Likes</td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td>1&nbsp;Reviews</td>
  	</tr>
	<tr>
    <td colspan="2" align="left"><div style='cursor:pointer;'><a href='#' onclick='U_like(51,,22)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></div></td>
    </tr>	
	
</table></td>	
	<td><table width="100%" border="0" cellspacing="0" cellpadding="5" class="restaurants_tbl">
	<tr>
    <td rowspan="4" align="left" valign="top" width="96"><img src="admin/upload/pro.jpg" width="96" height="95" border="0" /></td>
    <td align="center" valign="top" width="15%"><img src="images/name_icon.png" width="15" height="17" border="0" /></td>
    <td><span style="color:#6600CC; font-weight:bold;"><a href="profile.php?user_id=77">Veerabhadra</a></span></td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td>0&nbsp;Likes</td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td>0&nbsp;Reviews</td>
  	</tr>
	<tr>
    <td colspan="2" align="left"><div style='cursor:pointer;'><a href='#' onclick='U_like(77,,22)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></div></td>
    </tr>	
	
</table></td>	
	<td><table width="100%" border="0" cellspacing="0" cellpadding="5" class="restaurants_tbl">
	<tr>
    <td rowspan="4" align="left" valign="top" width="96"><img src="admin/upload/pro.jpg" width="96" height="95" border="0" /></td>
    <td align="center" valign="top" width="15%"><img src="images/name_icon.png" width="15" height="17" border="0" /></td>
    <td><span style="color:#6600CC; font-weight:bold;"><a href="profile.php?user_id=90">Rakesh Dhongadi</a></span></td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td>1&nbsp;Likes</td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td>0&nbsp;Reviews</td>
  	</tr>
	<tr>
    <td colspan="2" align="left"><div style='cursor:pointer;'><a href='#' onclick='U_like(90,,22)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></div></td>
    </tr>	
	
</table></td></tr><tr>	
	<td><table width="100%" border="0" cellspacing="0" cellpadding="5" class="restaurants_tbl">
	<tr>
    <td rowspan="4" align="left" valign="top" width="96"><img src="admin/upload/pro.jpg" width="96" height="95" border="0" /></td>
    <td align="center" valign="top" width="15%"><img src="images/name_icon.png" width="15" height="17" border="0" /></td>
    <td><span style="color:#6600CC; font-weight:bold;"><a href="profile.php?user_id=91">kiran katwe</a></span></td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td>0&nbsp;Likes</td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td>0&nbsp;Reviews</td>
  	</tr>
	<tr>
    <td colspan="2" align="left"><div style='cursor:pointer;'><a href='#' onclick='U_like(91,,22)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></div></td>
    </tr>	
	
</table></td>	
	<td><table width="100%" border="0" cellspacing="0" cellpadding="5" class="restaurants_tbl">
	<tr>
    <td rowspan="4" align="left" valign="top" width="96"><img src="admin/upload/abc_7269380358.jpg" width="96" height="95" border="0" /></td>
    <td align="center" valign="top" width="15%"><img src="images/name_icon.png" width="15" height="17" border="0" /></td>
    <td><span style="color:#6600CC; font-weight:bold;"><a href="profile.php?user_id=105">Dorcas G</a></span></td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/like-icon.png" width="20" height="18" border="0" /></td>
    <td>1&nbsp;Likes</td>
  	</tr>
  	<tr>
    <td align="center" valign="top" width="15%"><img src="images/review-icon.png" width="18" height="19" border="0" /></td>
    <td>2&nbsp;Reviews</td>
  	</tr>
	<tr>
    <td colspan="2" align="left"><div style='cursor:pointer;'><a href='#' onclick='U_like(105,,22)'><img src='images/like_btn.png' width='54' height='22' border='0' hspace='5'/></a></div></td>
    </tr>	
	
</table></td></tr></table>
<!---------------------2-------------->	

	</div><!--restaurants-->

<!------------------------------------------------------------------------------------------------------------------------------------------>
	<div class="gourments"><!--gourments--->
		
	<div class="gourments"><!--gourments-3-->
		
	</div><!---gourments-3--->
	
	
<!---------------------------------------------liked_end-------------------------------------------------------->		
		
		
		
		
		
		</div><!----tab_container---->
		</div>
    </div>
	
	</div><!---tab--->
        
        <p id="domtabprintview"></p>

<div id="other" class="domtab doprevnext">
	<ul class="domtabs">
		<li><a href="#t1">MENU</a></li>
		<li><a href="#t2">MAP</a></li>
                <li><a href="#t3">DETAILS</a></li>
	</ul>
	<div>
		<h2><a name="t1" id="t1">Main Menu</a></h2>
                <img src="images/chickbytesm.jpg" width="620" height="620">
                <p><a href="#top">back to menu</a></p>
	</div>
	<div>
		<h2><a name="t2" id="t2">Location Map</a></h2>
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=bvb,+Vidya+Nagar,+Hubli,+Karnataka&amp;daddr=PB+Road,+Prashant+Colony,+Vidya+Nagar,+Hubli,+Karnataka&amp;geocode=FcV-6gAdO0d6BCFlliUgluqSWSkF8e4fM9e4OzFlliUgluqSWQ%3BFdh66gAdOkV6BCnZHaQcM9e4OzF9aVDDxBYHrg&amp;aq=0&amp;oq=P+B+&amp;sll=15.368526,75.121127&amp;sspn=0.003067,0.006099&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=15.368526,75.121127&amp;spn=0.002071,0.00236&amp;t=m&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?f=d&amp;source=embed&amp;saddr=bvb,+Vidya+Nagar,+Hubli,+Karnataka&amp;daddr=PB+Road,+Prashant+Colony,+Vidya+Nagar,+Hubli,+Karnataka&amp;geocode=FcV-6gAdO0d6BCFlliUgluqSWSkF8e4fM9e4OzFlliUgluqSWQ%3BFdh66gAdOkV6BCnZHaQcM9e4OzF9aVDDxBYHrg&amp;aq=0&amp;oq=P+B+&amp;sll=15.368526,75.121127&amp;sspn=0.003067,0.006099&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;ll=15.368526,75.121127&amp;spn=0.002071,0.00236&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                <p><a href="#top">back to menu</a></p>
	</div>
    <div>
		<h2><a name="t1" id="t3">More Information</a></h2>
                <h3>Auto Fare : Rs. 25.00</h3><br>
                <h3>Bus Fare : Rs. 8.00</h3>
                <p><a href="#top">back to menu</a></p>
	</div>
	
</div>
        
        
</div><!---content--->


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
				<h3><a href="" target="_blank"><img src="images/facebook.png" width="75" height="75" border="0" align="top" hspace="5"/></a><a href="" target="_blank"><img src="images/twitter.png" width="75" height="75" border="0" hspace="5 /></a><a href=""><img src="images/youtube.png" width="75" height="75" border="0" hspace="5" /></a></h3> 	 
                               
			</div>
                  
			<div class="footer_menu_3_copyright"><p>All rights reserved 2013-14.</p></div>
		
		</div>
            <div class="footer_menu_3">
                <div class="footer_menu_3_addr">
                                    </div>
            </div>
            
	
	</div><!---footer_menu_bg---->

</div><!---footer---->
</body>
</html>
