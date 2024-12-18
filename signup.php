
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="wad.css">
	<link rel="stylesheet" type="text/css" href="Order.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script>
		function validateFullName(){
			let fname=document.getElementById("txtFullName").value;
			
			if((fname=="") || (fname=="null"))
				{
					alert("please Enter Full Name !!!")
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
			if(validateFullName() && validateEmail() && validatePassword())
				{
					alert("Recation Added!!!");
				}
			else
			{
				event.preventDefault();
			}
			
           }
		
		function validatePassword(){
			let pass=document.getElementById("txtPassword").value;
			let cpass=document.getElementById("txtConfirmPassword").value;
			
			if((pass!=cpass)  || (pass.length<5))
				{
					alert("Plase Enter a Correct password!!!");
			        return false;
				}
			return true;
			
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

		<form method="post" action="registationhandler.php">
<table width="478" border="0" align="center">
  <tr>
    <td colspan="2"><h1 align="center">SignUp Now</h1></td>
    </tr>
  <tr>
    <td width="251"> Name </td>
    <td width="217"><label for="txtFullName"></label>
      <input type="text" name="txtFullName" id="txtFullName" /></td>
  </tr>
  <tr>
    <td>Email </td>
    <td><label for="txtEmail"></label>
      <input type="text" name="txtEmail" id="txtEmail" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="txtPassword"></label>
      <input type="password" name="txtPassword" id="txtPassword" /></td>
  </tr>
  <tr>
    <td>Confrim Password</td>
    <td><label for="txtConfirmPassword"></label>
      <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" /></td>
  </tr>


<tr>
    <td>Contact Number</td>
    <td><label for="txtContact"></label>
      <input type="text" name="txtContact" id="txtContact" /></td>
  </tr>
  
  <tr>
    <td height="71"><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" onClick="validateAll()">     
         <input type="reset" name="btnReset" id="btnReset" value="Reset" /></td>
    
  </tr>
</table>
</form>
	
</body>
</html>