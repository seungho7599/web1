<?php
	$conn=mysqli_connect("localhost","root","rlatmdgh0219");
	mysqli_select_db($conn,"opentutorials");
	$result=mysqli_query($conn,"SELECT*FROM topic");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="background">
	<header>
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVl4q9CQKbJhggcmbAmYxn8AYRwTSyL5Rhmg&usqp=CAU" alt="배경">
	<h1><a href="http:/index.php">JavaScript</a></h1>
	</header>
	<nav>
		<ol>
			<?php
				while($row=mysqli_fetch_assoc($result)){
				echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";

			}
			 ?>
		</ol>
	</nav>
	<div id="contral">
		<input type="button" value="white" onclick="document.getElementById('background').className='white'"/>
		<input type="button" value="black" onclick="document.getElementById('background').className='black'"/>
	</div>
	<article>
<?php
if(empty($_GET['id'])==false){
	echo file_get_contents($_GET['id'].".txt");
}
 ?>
	</article>
</body>
</html>
