<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="../CSS/mystyle.css">
</head>

<header>
	<h1>Book Collection</h1>
</header>

<body>  
	
	<table>
		<tr>
			<td>
				<a href='index.php'  id="home">
					Home
				</a>
			</td>
		</tr>
	  <tr>
		<td>
			<a href='Book2.php' >
				<img src='../Image/book2.jpg' alt='logo'width="250px" height="250px">
				<h2>Staying healthy</h2>
			</a>
		<label>
			This book is an exercise book<br>
			for the kids in pre-school,<br>
		  	Highlights Summer Big Fun...<br>          
		  	<h2 id="Promo1">
				79.99€
			</h2>
		</label>
		<form action="cart.php" method="get">
			<input type="submit" value="Add to cart">
			<input type="number" id="Q1" min="1" value="1">
			<button type="button" onclick="addToCollection('Staying Healthy', 'Q1')">
				Add to Collection
			</button>
			<input type="text" id="P1" value="10%Off">
			<button type="button" onclick="promoCode('Staying Healthy', 'Promo1', 'P1')">
				Add PromoCode
			</button>
		</form>
		</form>
		</td>
		<td>
			<a href='Summer1.php' >
				<img src='../Image/summer1.jpg' alt='logo'width="250px" height="250px">
				<h2>Summer Exercise</h2>
			</a>
			<label>
				This book is an exercise book<br>
				for the kids in pre-school,<br>
				Highlights Summer Big Fun...<br>          
				<h2 id="Promo2">
					49.99€
				</h2>
			</label>
			<form action="cart.php" method="get">
				<input type="submit" value="Add to cart">
				<input type="number" id="Q2" min="1" value="1">
				<button type="button" onclick="addToCollection('Summer Exercises', 'Q2')">
					Add to Collection
				</button>
				<input type="text" id="P2" value="20%Off">
				<button type="button" onclick="promoCode('Summer Exercises', 'Promo2','P2')">
					Add PromoCode
				</button>
			</form>
		</td>
		<td>
			<a class="Exercises" href='Summer2.php' target='_blank'>
				<img src='../Image/summer2.jpg' alt='logo' width="250px" height="250px">
				<h2>Math Exercise 3-4</h2>
			</a>
			<label>
				This book is an exercise book<br>
				for the kids in pre-school,<br>
				Highlights Summer Big Fun...<br>          
				<h2 id="Promo3">
					59.99€
				</h2>
			</label>
			<form action="cart.php" method="get">
				<input type="submit" value="Add to cart">
				<input type="number" id="Q3" min="1" value="1">
				<button type="button" onclick="addToCollection('Math Exercises', 'Q3')">
					Add to Collection
				</button>
				<input type="text" id="P3" value="30%Off">
				<button type="button" onclick="promoCode('Math Exercises', 'Promo3', 'P3')">
					Add PromoCode
				</button>
			</form>
		</td>
	  </tr>
	  <tr id="Collection" >
		<td>
			<h3>Your Collection</h3>
			<button type="button" onclick="document.getElementById('BookList').style.display='none'">
                Hide Collection
            </button>
			
            <p>
				Here are the books you've added to your collection:
			</p>
            <ul id="BookList">
				
            </ul>
			
		</td>
	  </tr>
	</table>	
</body>
<script src="../JavaScript/script.js"></script>
<script src="../JavaScript/bookCollection.js"></script>
</html>  
