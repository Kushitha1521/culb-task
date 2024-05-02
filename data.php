<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
        </style>
    <link rel="stylesheet" type="text/css" href="style.css">
     <!--enter the data for the database-->
     <?php
        $name = $_POST['fname'] ?? '';
        $email = $_POST['femail'] ?? '';
        $student_id = $_POST['fstudent_id'] ?? '';
        $telno = $_POST['ftelno'] ?? '';
        $password = $_POST['fpassword'] ?? '';
        $repassword = $_POST['frepassword'] ?? '';

        $link = mysqli_connect('localhost', 'root', '', 'club');
        ?>
         
        
        <?php
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO detail (Name, Email, student_id, Tel_no, Password, Re_password)
                VALUES ('$name', '$email', '$student_id', '$telno', '$password', '$repassword')";
    
        $success = mysqli_query($link, $sql);
    
        if ($success and ($password==$repassword)) {?>
        <div class="succesANDerror">
            <img src="image/succes.png" alt="HTML5 Icon" style="height: 200px;width: 200px;margin-top:10%; margin-left:0%;" >
             <h2 style=" margin-top:5%; background-color:#3CB043; padding:8px 8px;font-family :comic sans MS;color: white;text-align: center; ">
             
            New data record has been inserted successfully.</h2>

        </div>
        <?php
        } else {?>
        <div class="succesANDerror">
             <img src="image/error.png" alt="HTML5 Icon" style="height: 200px;width: 200px;margin-top:10%; margin-left:0%;" >
            <h2 style=" margin-top:5%; background-color:#FF2400; padding:8px 8px;font-family :comic sans MS;color: white;text-align: center; ">
       
        
            Invalid Input
        </div>
        </h2>
    
            <?php
        }

        mysqli_close($link);
        ?>

        
    </head>
    <body>
    

    <div class="navbar" >
            <h2 style="color:white; margin-left:3%;" >Register<!--navigation bar and logo -->
            <img src="image/ecsc logo.png" alt="HTML5 Icon" style="height: 60px;width: 80px; position:relative; left:75%;margin-top:1%;" >
        </h2>
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
