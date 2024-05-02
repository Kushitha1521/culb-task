<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Change Automatic - Sagar Developer</title>
   
<style>
	body,html{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
}
.Section_top{
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    background-image: url(image.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    justify-content: center;
    animation: change 10s infinite ease-in-out;
}
.content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-transform: uppercase;

}
.content h1{
    color: #fff;
    font-size: 60px;
    letter-spacing: 15px;
}
.content h1 span{
    color: #111;
}
.content a{
    background: #85c1ee;
    padding: 10px 24px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 20px;
}
.content a:hover{
    background: #034e88;
    color: #fff;
}
@keyframes change{
   0%
   {
       background-image: url(image/main_image.jpeg);
       height: 550px;
       width: 1355px;
   }
   35%
   {
       background-image: url(image/image1.jpeg);
   }
   60%
   {
       background-image: url(image2.jpeg);
   }
   100%
   {
       background-image: url(image/image3.jpeg);
   }
   
}                                                  
    </style>
</head>
<body>

   <div class="Section_top">
    
       <div class="content">
           
           <h1>Sagar <span>Developer</span></h1>
           
           <a href="#">Welcome</a>
       </div>
       
   </div>
   
</body>

</html>
