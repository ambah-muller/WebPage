<?php
	include 'views/header.php';
?>

<h1>Search Results</h1>

<div class="article-container">
<?php 
	if(isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']); //search word from search box - convert to string so users cant fuck up system
		$sql = "SELECT * FROM infopage WHERE InfopageTitle LIKE '%$search%'
		OR Information LIKE '%$search%' OR InfoPagePublishDate LIKE '%$search%'"; //check if word matches any titles / text / author / date
//OR author LIKE '%$search%'
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result); //checking if there are results

		echo "There are ".$queryResult." results";

		if ($queryResult > 0) //Results
		{
			while($row = mysqli_fetch_assoc($result)){
				echo "<div class='article-box'>
					<h3>".$row['InfopageTitle']."</h3>
					<p>".$row['Information']."</p>
					<p>".$row['InfoPagePublishDate']."</p>
				</div>";
			}
		}
		else {
			echo "no matches";
		}
	}
?>
</div>
