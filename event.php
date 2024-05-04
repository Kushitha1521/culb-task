<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="style.css">

		<?php
		function past_event(){
			$link = mysqli_connect('localhost', 'root', '', 'club2');/*connect to database*/
			?>
			
			<?php
			if (!$link) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT event_name, date, discription FROM past_event";/*get data form database(SQL code)*/
					
			$success = mysqli_query($link, $sql);
			
			if(mysqli_num_rows($success)>0){
				while($row=mysqli_fetch_assoc($success)){
					echo '<li>' . $row['event_name'] . ':<strong> :' .$row['date'].':</strong>'. $row['discription'] . '</li>';
				}
			}else{
				echo"no any data records.";
			}

			mysqli_close($link); /*close database connection*/
		}
		function upcomming_event(){
			$link = mysqli_connect('localhost', 'root', '', 'club2');/*connect to database*/
			?>
			
			<?php
			if (!$link) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT event_name, date, discription FROM _upcomming_event";/*get data form database(SQL code)*/
					
			$success = mysqli_query($link, $sql);
			
			if(mysqli_num_rows($success)>0){
				while($row=mysqli_fetch_assoc($success)){
					echo '<li>' . $row['event_name'] . ':<strong> :' .$row['date'].':</strong>'. $row['discription'] . '</li>';
				}
			}else{
				echo"no any data records.";
			}

			mysqli_close($link); /*close database connection*/
		}
        ?>

	

		<style>
		body {
			t-family: Arial, sans-serif;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			
		}

		h1, h2 {
			color: #333;
		}

		ul {
			list-style-type: none;
			padding: 0;
		}

		li {
			margin-bottom: 10px;
		}

		li strong {
			color: #007bff;
		}
	</style>
    </head>

    <body>
		<div class="navbar" style="margin-top:-2%; margin-left:-1%;">
			<h2 style="color:white; margin-left:3%;" >Event <!--navigation bar and logo -->
				<img src="image/ecsc logo.png" alt="HTML5 Icon" style="height: 60px;width: 80px; position:relative; left:75%;margin-top:1%;" >
			</h2>
		</div>




		<div class="container">
			<h1>Events</h1>

			<h2>Past Events</h2>
			<ul>
			<?php past_event(); ?>
			</ul>

			<h2>Upcoming Events</h2>
			<ul>
			<?php upcomming_event(); ?>
			</ul>
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
