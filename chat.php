<?php
	include 'db.php';
	
	$sql = "SELECT * FROM Chat ORDER BY ID DESC";
	$result = $conn->query($sql);
				
	while($row = $result->fetch_assoc())  :
?>
		<div id= "chat_data">
			<span id= "displayName"> <?php echo $row[Name]; ?> </span>:
			<span id= "displayMsg"> <?php echo $row['Message']; ?> </span>
			<span id= "displayTime"> <?php echo formatDate($row['Date']); ?> </span>
		</div>
	<?php  endwhile; ?>
			