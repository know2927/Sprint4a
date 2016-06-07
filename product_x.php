<html lang="en">


<head>
	<title>Spectre Sports </title>
	<meta charset="UTF-8">
	<link href="style1.css" rel="stylesheet" type="text/css" media="screen">


</head>


<body>
<div id="header" >
		<h1>
		Spectre Sports
		</h1>
		
		<ul >
			<li>
				<a href="test.html">Home</a>
			</li>
			<li>
				<a href="test.html">Products</a>
			</li>
			<li>
				<a href="test.html">About Us</a>
			</li>
			<li>
				<a href="test.html">Contact</a>
			</li>
			<li>
				<a href="user.php">Login</a>
			</li>
		</ul>
		
		
	
	</div>

	
	<section id="homepage">
		
		<article>
		
			<!-- Picture of the product -->
		    <div  id=clickcard style="float:left; width: 50%;">
				<img src="IMG_0080.jpg" style="width: 100%;">
			</div>
			
		    <!-- Discription of the product -->
			<div  class="discriptionSideBox" style="float:right; width: 20%; padding-right:20%">
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
			</div>
			
			
			
		</article>
		
		<br> <br>
		
  
	</section>
	
	<aside id=sideL>
		<header>Other item0</header><br>
		
	</aside>
	<aside id=sideL>
		<header>Other item1</header><br>
		
	</aside>
	
	<section>
		<article id=card style="float:bottom;">
			<!-- Review form to be sent some where on the server -->
				<form action="">
					Your name <br>
					<input type="text" name="name" value="Name" size= "75"/> <br>
					Please write a review <br>
					<textarea name="review" value="Your review here"; cols="100" rows="10"/> </textarea><br>
					<input class="star star-5" id="star-5" type="radio" name="star"/>
					<label class="star star-5" for="star-5"></label>
					<input class="star star-4" id="star-4" type="radio" name="star"/>
					<label class="star star-4" for="star-4"></label>
					<input class="star star-3" id="star-3" type="radio" name="star"/>
					<label class="star star-3" for="star-3"></label>
					<input class="star star-2" id="star-2" type="radio" name="star"/>
					<label class="star star-2" for="star-2"></label>
					<input class="star star-1" id="star-1" type="radio" name="star"/>
					<label class="star star-1" for="star-1"></label>
					<label class="button">Submit Review</label>
				 </form>
  
		</article>
	</section>
	
	</body>




</html>