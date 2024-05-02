<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			@media only screen and (max-width: 768px) {/* Full width for columns on smaller screens */
			.navbar{
				width:100%;
				height:auto;;
			}	
			form{
				
				height:auto;
				
				margin-top:100%;
			}
			.detailBottam{
				margin-top:10%;
			}
			
			}
		</style>
    </head>

    <body>
    <div class="navbar" style="margin-top:-10%;width:105%; margin-left:-1%;" >
	<h2 style="color:white; margin-left:3%;" >Contact <!--navigation bar and logo -->
		<img src="image/ecsc logo.png" alt="HTML5 Icon" style="height: 60px;width: 80px; position:relative; left:75%;margin-top:1%;" >
	</h2>
	</div>
	<div class="form" style="margin-top:10%; border: 2px solid black; text-align:left; padding:20px 30px; border-radius: 20px; margin-top:10%; font-size:30px; width:40%; margin-left:30%; ">
	<form name='user' action='contact.php' method='post'>
			<h2>Send Message</h2>

		<label for="name">Name   :</label>
		<input type="text" id="name" name="name" required style=" padding:0px 60px; font-size:20px; ">
		<br><br>
		
		<label for="email">Email  :</label>
		<input type="email" id="email" name="email1" required style=" padding:0px 60px; font-size:20px; ">
		<br><br>
		
		<label for="message">Message:</label>
		<textarea id="message" name="message1" required style=" padding:0px 60px; font-size:20px; "></textarea>
		<br><br>
		
		<button type="submit"style="padding:10px 30px; font-size:15px; ">Send</button>
		</form>
	</div>
	
	<?php
        $name = $_POST['name'] ?? '';
        $email = $_POST['email1'] ?? '';
        $message = $_POST['message1'] ?? '';
		$link = mysqli_connect('localhost', 'root', '', 'club');

		if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO contact (Name, Email, message)
                VALUES ('$name', '$email', '$message')";
    
        $success = mysqli_query($link, $sql);
    
        if (($success)and(!($name==null))) {?>
        
            echo"Your comment successfully sended.";
			<?php
        } else {
        
        
            //echo"error!...";
       
        }

        mysqli_close($link);
        

	?>
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
	</div>


    </body>
    </html>