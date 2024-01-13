<html>  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            /* Global styles */
            
           .center {                
                margin-left: auto;
                margin-right: auto;
                width: 300px;
            }
			
			.mySlides {display: none;}
			img {vertical-align: middle;}

			/* Slideshow container */
			.slideshow-container {max-width: 1000px; position: relative; margin: auto;}

			/* The dots/bullets/indicators */
			.dot {height: 15px; width: 15px; margin: 0 2px; background-color: #bbb; border-radius: 50%; 
			display: inline-block;  
			transition: background-color 0.6s ease;
			}

			.active {background-color: #717171;}
			/* Fading animation */
			.fade {animation-name: fade; animation-duration: 1.5s;}

			@keyframes fade {from {opacity: .4} to {opacity: 1}
			}

			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 300px) {.text {font-size: 11px}}
        </style>
</head>
<body class="w3-black">   
	<div class="w3-container">
		<h1 style="color:white; text-align: center"> Upcoming Student Event </h1></br>
		
			
				<?php  
				include("config.php");
				$sql = "SELECT * FROM poster ";  
				$result = mysqli_query($conn, $sql);  	  
				if (mysqli_num_rows($result) > 0) {  
					echo "<table align='center' border='1' cellpadding='15'>";  
					//mysqli_fetch_assoc -puts all the results into an associative array that we can loop through  
					while($row = mysqli_fetch_assoc($result)) { 

						echo "<div class='slideshow-container'><td>
							<img class='mySlides' src='upload/".$row["image"]."' width='650' height='480'></td>
						</div>"; 
				
					}  
				 echo "</table>";  
				} else {  
					echo "0 results";  
				}  
				  
				 mysqli_close($conn);   
				?>
			
		
	</div>
	<div class="w3-container center">
		<a href='addimage.php'>Insert Book</a>  
	</div>	
    
		
	<script>
		var index = 0;
		slideshow();
		function slideshow() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		  }
		  index++;
		  if (index > x.length) {index = 1}    
		  x[index-1].style.display = "block";  
		  setTimeout(slideshow, 3000); // Change slides every 3 seconds
		}
</script>
</body>  
</html>