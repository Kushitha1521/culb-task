<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta http-equiv="refresh" content="200">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
	.underline{
		margin-left:6%; 
		margin-top:0%;
		letter-spacing: 1px;
	}
	

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 400px;
  box-sizing: border-box; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  box-sizing: border-box;
}
   
@media only screen and (max-width: 768px) {
  /* Adjustments for smaller screens */
  .column {
    width: 100%; /* Full width for columns on smaller screens */
    height: auto; /* Adjust height as needed */
  }
  .detailBottam{
	width: 100%; /* Full width for columns on smaller screens */
    height: auto;
	
  }
  .bottam{
	width: 100%; 
    height: auto;
	
  }
  .detail{
	width: 100%;
    height: auto;
	
  }
  .navbar{
	width: 100%; 
    height: auto;
  }
  .topicBar{
	width: 100%; 
    height: auto;
  }
  .Section_top{
	width: 100%; 
    height: 100%;
  }
  .divideLeft{
	width: 100%; 
    height: auto;
  }
  .divideRight{
	width: 100%; 
    height: auto;
  }
  .update{
	width: 100%; 
    height: auto;
  }
  .content{
	width: 100%; 
    height: auto;
  
  }
  
  
  
}

	
</style>
</head>
<body >
	<div class="topicBar"><!--navigation menu -->
		<h2 >
			<a  href='about.php'>About Us  &ensp;</a>
			<a  href='news.php'> News &ensp;</a>
			<a  href='event.php'> Event &ensp;</a>
			<a  href='contact.php'> Contact &ensp;</a>
		</h2>
	</div>
	<div class="Section_top">
		<div class="content">
           
           <h1>Electronic and <span>Computer Science Club</span></h1>
		    
           
           <a href="#">Welcome</a>
       </div>
	
	</div>

	<div class="navbar" style="background-color:#31708E;">
	<h2 ><a  href='login.php'>Login </a> <a  href='signup.php'> Sign Up&ensp;</a><!--navigation bar and logo -->
		<img src="image/ecsc logo.png" alt="HTML5 Icon" style="height: 60px;width: 80px; position:relative; left:75%;margin-top:1%;" >
	</h2>
	</div>
	
	
	
	
	
	
	
	<div style="width:100%; letter-spacing: 2px;">
		<div class="divideLeft"><!--our vision -->
		   <img src="image/vision.png" alt="HTML5 Icon" style="height: 80px;width: 75px;  " > <br>
			<b>Our Vision </b><br><!-- divide page -left side -->
			<p style="font-size:28px;letter-spacing: 2px;">
			"Our club fosters curiosity and collaboration in electronics and computer science through workshops and projects. We aim to empower members to excel and innovate in these dynamic fields."
			</P>	
		</div>
		
		<div class="divideRight" ><!--our mission-->
		<img src="image/mission.png" alt="HTML5 Icon" style="height: 80px;width: 75px;" > <br>
			<b>Our mission</b> <br>  <!-- divide page-right side-->
			<p style="font-size:28px; ">
			"Our mission is to inspire learning and innovation in electronics and computer science through workshops, projects, and a supportive community, empowering members to excel and make a positive impact."
			</P>
		</div>
	</div>
	
	<br>
		<div class="update"> <!--lastest update -->
			<h2 style="margin-left:10;letter-spacing: 2px;" >LASTEST UPDATE </h2>
		</div>
			

		

		<div class="row">
			<div class="column" style="background-color:#aaa;">
				<h2>ROBOT BATTLES</h2>
				<a href="https://web.facebook.com/UOKRobotBattles/posts/pfbid02mNfd2mkm7qkgk81ptPkj813Vv1NQrJRXPaAbprWvXX58mLuTnxWqiFt8LTt3rc2Ul"><p>Learn more..</p></a>
				<img src="image/battlebot2.jpeg" alt="HTML5 Icon" style="height: 250px;width: 250px; border: 5px solid #5085A5; border-radius: 20px;" >
				<div class="centered">Comming soon...</div><br>
			</div>
			<div class="column" style="background-color:#bbb;">
				<h2>TECHSYMHONY</h2>
				<a href="https://web.facebook.com/story.php?story_fbid=pfbid02a3dfxmB3GYdnxjrk9e9D9NQv8QQYrx1P3X7viHEqVJeAp3AK9CT6gEpfFgtaAFhrl&id=61550473266598&mibextid=ZbWKwL&paipv=0&eav=Afb4bZJIGPL-wO4WbfXwLO7iE6heaSRkCKr2larUETVmkHnOnDzS80rm85GQ6fsgAKk&_rdc=1&_rdr"><p>Learn more..</p></a>
				<img src="image/techseminner.jpg" alt="HTML5 Icon" style="height: 250px;width: 250px; border: 5px solid #5085A5; border-radius: 20px;" >
			</div>
			<div class="column" style="background-color:#ccc;">
				<h2>BECS COURSE</h2>
				<a href="news.php"><p>Learn more..</p></a>
				<img src="image/news1.jpg" alt="HTML5 Icon" style="height: 250px;width: 250px; border: 5px solid #5085A5; border-radius: 20px;" >
			</div>
			<div class="column" style="background-color:#ddd;">
				<h2>DID YOU KNOW</h2>
				<a href="https://web.facebook.com/ecscuok/posts/pfbid02eww4xJV4S7xSfbrPwq1eUL46v9JtFAbCBH9tTMqGWeKvdH2BRsNb8Dy4U3D1jb1el?mibextid=ZbWKwL"><p>Learn more..</p></a>
				<img src="image/know1.jpg" alt="HTML5 Icon" style="height: 250px;width: 250px; border: 5px solid #5085A5; border-radius: 20px;" >
			</div>
		</div>


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

