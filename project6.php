\<!DOCTYPE HTML>
<html>
	<head>
		<title>Internet Of Things</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	</head>


	<body>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo">
							<span class="material-icons">computer </span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Internet Of Things</h1>
								<p1> <em> Welcome to the Page of Testing Internet of Things Using Raspberry Pi board</em></p>
								

<form name="ipwala" method="POST">
<a href = "http://rg.to/file/de7d7cd93960c3d5fcab7ea6c4dd57f6/final1.zip.html "> Download the package to your raspberry pi </a><br>
<a href = "http://rg.to/file/4c2d0b587758977bc9c6cfccd8f4fcd3/READ_ME.txt.html">READ ME FILE</a><br>
<br>IP Address is:
<input type = "text" name = "j" value = "" style = "text-align:center;">
</form>

<p2> <strong> </bold> </p2>
							</div>
						</div>
<style>
div.gallery {
    margin: 3px;
    border: 1px solid #ccc;
    float: left;
    width: 80px;
}

div.gallery:hover {
    border: 1px solid #777;
}
div.gallery1:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 100;
}

div.desc {
    padding: 5px;
    text-align: center;
}
div.gallery1
{
margin:3px; 
margin-left: 109px; 
border: 1px solid #ccc; 
float: left; 
width: 80px;
}
div.gallery1 img {
    width: 100%;
    height: 100;
}
</style>
<?php
  $v=array(0,0,0,0,0,0);
 /*if(isset($_GET['j']&&!empty($_GET['j']))
{
$value = $_GET['j'];
$var = exec("python tryhtttp7.py $value");
echo $var;
}
*/

  for($i=0;$i<6;$i++)
  {
   system("gpio mode ".$i." out");
   $v[$i]=exec ("gpio read ".$i );
  }
  for ($j = 0; $j < 6; $j++) {
		if ($v[$j] == 0 ) {
                     echo("<img id='button_".$j."'  src='red_".$j.".png' width='80'  onclick='change_pin(".$j.");'/> ");
                     /*  
                          if($j==0){
                             echo("<img id='button_".$j."' src='red_0.png' onclick='change_pin(".$j.");'/>");

                        echo '<div class="gallery1">
                        <img src="red_0.png" width="80px" height="80">
                        <div class="desc">PIN 11</div>
                        </div>';
                        }

                      if($j==1){
                             echo("<img id='button_".$j."' src='red_1.png' onclick='change_pin(".$j.");'/>");

                        echo '<div class="gallery">
                        <img src="red_1.png" width="80px" height="80">
                        <div class="desc">PIN 11</div>
                        </div>';
                        }
                     if($j==2){
                         echo("<img id='button_".$j."' src='red_2.png' onclick='change_pin(".$j.");'/>");

                        echo '<div class="gallery">
                        <img src="red_2.png" width="80px" height="80">
                        <div class="desc">PIN 12</div>
                        </div>';
                       }
                     if($j==3){
                           echo("<img id='button_".$j."' src='red_3.png' onclick='change_pin(".$j.");'/>");

                        echo '<div class="gallery">
                        <img src="red_3.png" width="80px" height="80">
                        <div class="desc">PIN 13</div>
                        </div>';
                    }  */                     
		
      
}

		
		if ($v[$j] == 1 ) {
                      
                         echo("<img id='button_".$j."' src='green_".$j.".png' width = '80' onclick='change_pin(".$j.");'/ > ");
/*if($j==0)
{
			echo '<div class="gallery1">
                        <img src="green1.png" 
                        width="80px" height="80" />
                        <div class="desc">PIN 7</div>
                        </div>';
                       }
                      if($j==1){
                           echo("<img id='button_".$j."' src='green_1.png' onclick='change_pin(".$j.");'/>");
  
                       echo '<div class="gallery">
                        <img src="green1.png" width="80px" height="80">
                        <div class="desc">PIN 11</div>
                        </div>';
                        }
                     if($j==2){
                          echo("<img id='button_".$j."' src='green_2.png' onclick='change_pin(".$j.");'/>");

                        echo '<div class="gallery">
                        <img src="green2.png" width="80px" height="80">
                        <div class="desc">PIN 12</div>
                        </div>';
                       }
                     if($j==3){
                               echo("<img id='button_".$j."' src='green_3.png' onclick='change_pin(".$j.");'/>");

                        echo '<div class="gallery">
                        <img src="green3.png" width="80px" height="80">
                        <div class="desc">PIN 13</div>
                        </div>';
                      
                      
                }*/
   
  
           
            
 }              

}

if(!empty($_POST['j']))
{
$value = $_POST['j'];
$var = exec("python tryhtttp7.py $value");
echo $var;
}
 
?>





<br><br>
<br>
	<footer id="footer">

	<p class="major"> Made at TechieNest by Mohit Khotani,Saksham Gupta,Sudhanshu Singh Rathore .</p>
			</footer>

		</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="script.js"></script>


	</body>
</html>
