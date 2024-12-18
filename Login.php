<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="contact.css">
		<link rel="stylesheet" type="text/css" href="wad.css">
	
		
	<script>
		function validateFullName(){
			let fname=document.getElementById("txtFullName").value;
			
			if((fname=="") || (fname=="null"))
				{
					alert("please Enter Your Full Name !!!")
					return false;
				}
			
			return true;
		}
		
		function validateEmail(){
			let email=document.getElementById("txtEmail").value;
			
			let at = email.indexOf("@");
			let dt = email.lastIndexOf(".");
			let len = email.length;
			
			if((at<2) || (dt-at<2)||(len-dt<2))
				{
					alert("please Enter a valid Email adderss !!!");
					return false;
				}
			
			return true;	
			
		}
		
		function validateAll(){
			if(validateFullName() && validateEmail())
				{
					alert("Thank You For Contact Us!!!!");
				}
			else
			{
				event.preventDefault();
			}
			
           }
		
		
	</script>
</head>

<body>
	
<div class="topnav">
  <a class="active" href="Home.html">Home</a>
  <a href="contact.html">Contact</a>
  <a href="About.html">About</a>
	<a href="Order.html">Order</a>
  <input type="text" placeholder="Search..">
		
		
		<div class="dropdown">
    <button class="dropbtn"> Cake Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Birthday Cakes.html">Birthday Cakes</a>
      <a href="Anniversary Cakes.html">Anniversary Cakes</a>
      <a href="Chocolate Cakes.html">Chocolate Cakes</a>
	  <a href="Redvelvet Cakes.html">Redvelvet Cakes</a>
	  <a href="Coffee Cakes.html">Coffee Cakes</a>
	  <a href="Eggless Cakes.html">Eggless Cakes</a>
      <a href="Fruit Cakes.html">Fruit Cakes</a>
 </div>
 </div>

	<div class="dropdown">
    <button class="dropbtn"> Bakery Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Mini Pizza.html">Mini Pizza</a>
      <a href="Donuts.html">Donuts</a>
      <a href="Cup Cakes.html">Cup Cakes</a>
	  <a href="Savory Iteams.html">Savory Iteams </a>
	  <a href="Muffins.html">Muffins</a>
	 
 </div>
 </div>
</div>
	
	



<form id="form1" name="form1" method="post" action="">
<table width="478"  border="0" align="center">
  <tr>
    <td colspan="2"><h1 align="center">Login</h1></td>
    </tr>
  <tr>
    <td width="251"  >User Name</td>
    <td width="217"><label for="txtFullName"></label>
      <input type="text" name="txtFullName" id="txtFullName" size="20"  /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td ><label for="txtEmail"></label>
      <input type="text" name="txtEmail" id="txtEmail" size="20" /></td>
  </tr> 
	


  <tr>
    <td height="71"><input type="submit" name="btnLogin" id="btnLogin" value="Login" onClick="validateAll()">     
       </td>
    
  </tr>
</table>
</form>
	

	
	
</body>
</html>