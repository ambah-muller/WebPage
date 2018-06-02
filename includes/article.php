<?php
	include 'header.php';
?>

<h1>Topic Heading</h1>

<div class="article-container">
	<?php 

		$title = mysqli_real_escape_string($conn, $_GET['title']);
		$date = mysqli_real_escape_string($conn, $_GET['date']);

		$sql = "SELECT * FROM infopages WHERE title='$title' AND date='$date'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<a href='article.php?title=".$row['title']."&date=".$row['date']."'><div class='article-box'>
					<h3>".$row['title']."</h3>
					<p>".$row['text']."</p>
					<p>".$row['date']."</p>
					<p>".$row['author']."</p>
				</div></a>";
			}
		}
	?>

</body>
</html>