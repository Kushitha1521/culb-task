<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
.login {
  background-color:white ;
  width: 80%;
  max-width: 600px;
  margin: 0 auto;
  height:450px;
  border: 2px solid black;
  padding:30px;
  margin-left: 280px;
  margin-top: 180px;
  align:center;
}
@media screen and (max-width: 768px) {
  .login {
    width: 90%; /* Adjust width for smaller screens */
    padding: 20px; /* Adjust padding for smaller screens */
  }
  .navbar{
	width: 100%; 
    height: auto;
  }
  
}
</style>
</head>
<body>
    <div class="navbar" style="margin-top:-14%;width:105%; margin-left:-1%;">
        <h2 style="color:white; font-size:30px; margin-left:3%;" >Login &ensp;</a><!--navigation bar and logo -->
            <img src="image/ecsc logo.png" alt="HTML5 Icon" style="height: 60px;width: 80px; position:relative; left:75%;margin-top:1%;" >
        </h2>
	</div>

<!--login form-->
 <form name='user' action='checklogin.php' method='post'>
    <div class="login"><fieldset style=" background-color:white;  border-color:#808080  padding:7px 20px;"> 
	
	
	 <p><legend style="font-family:verdana;  font-size:45px;  border:; text-align:center; "><B>Login</B></legend>
	 </P>
<br><br>

<P><label style="font-family:verdana;  font-size:20px;">EMAIL   &ensp;&nbsp; &ensp; :-</label>
	  <input type="email" name="text1" style=" padding:0px 60px; font-size:20px; "></p><br><br>
	  
	  
	  <P><label style="font-family:verdana;  font-size:20px;">PASSWORD  :-</label>
	  <input type="password" name="text2" style=" padding:0px 7px; font-size:20px; "></p><br><br>
	  <input type="submit" value="SUBMIT" style="padding:10px 30px; font-size:15px; "  >
	  <input type="reset" value="RESET" style="padding:10px 30px; font-size:15px;   "> 
	  <a href="password.html">
	  <p style="font-size:25px; text-align:right;">forget password</p></a>
	  
	  </fieldset></div>
	  <br><br>
</form >
<div class="detailBottam"><!--deatais of page and social media links -->
		<div style="width:100%;">
			<div class="detail" style="float:left; margin-top:-8%;width:23%; ">

				<img src="image/ecsc logo.png" alt="HTML5 Icon" style="height: 150px;width: 170px; position:relative; right:35%;" ><P style="font-size:15px; margin-left:-55%;">"Let's Embrace the world of Hardware and Software, to create a sustainable future"</P>
			</div>
			
			<div class="detail" style="float:left; margin-left:12%;width:40%; margin-top:-5%;">
				FOLLOW US<br>
				<div style="font-size:15px; margin-top:5%;">
					<a href='https://web.facebook.com/ecscuok/'><img src="image/facebooklogo.png" alt="HTML5 Icon" style="height: 50px;width:50px; "></a> &ensp;&ensp;
					<a href='https://www.youtube.com/@ECSCUOK'><img src="image/youtube.png" alt="HTML5 Icon" style="height: 50px;width:50px; " ></a>&ensp;&ensp;
					<a href='https://www.linkedin.com/company/electronics-and-computer-science-club/'><img src="image/linkedin.png" alt="HTML5 Icon" style="height: 50px;width:50px;" ></a>&ensp;&ensp;
					<a href='https://www.instagram.com/ecsc_uok/'><img src="image/instagram.png" alt="HTML5 Icon" style="height: 50px;width:50px; " ></a>&ensp;&ensp;
					<a href=''><img src="image/twitter.png" alt="HTML5 Icon" style="height: 50px;width:50px; " ></a>&ensp;&ensp;
					
				</div>
			</div>
			<div class="detail" style="float:right; margin-right:-10%; margin-top:-20%; width:20%;  ">
				STAY CONNECTED<br>
				<img src="image/location.png" alt="HTML5 Icon" style="height: 30px;width:30px; margin-top:2%;" ><p style="font-size:23px; margin-top:2%; ">Faculty of Science,<br> University of<br> Kelaniya</p>
				
				<img src="image/phone.png" alt="HTML5 Icon" style="height: 30px;width:30px; margin-top:2%;" ><p style="font-size:23px; margin-top:2%; ">(+94) 12 345 6789</p>
				<a href="mailto:ecs.uok@gmail.com" style="text-decoration: none;">
				<img src="image/email.png" alt="HTML5 Icon" style="height: 30px;width:30px; margin-top:2%;" ><p style="font-size:23px; margin-top:2%;  color:white;">ecs.uok@gmail.com</p>
				</a>
			</div>
			
		</div>
		

	</div>
	<div class="bottam"><!--developer details -->
		<p>Copyright &copy  <?php echo date('Y'); ?>  - Developed by <b>Kushitha Lakshitha</b>
	</div>
</body>
</html>