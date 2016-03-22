<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel= "stylesheet" type= "text/css" href= "style.css"/> 
		<script>
			function ajax(){
				var req = new XMLHttpRequest();
				req.onreadystatechange = function(){
					if(req.readyState == 4 && req.status == 200){
						document.getElementById("chat").innerHTML = req.responseText;
					}
				}
				req.open('GET', 'chat.php', true);
				req.send();
			}
			setInterval(function(){ajax();}, 1000);
		</script>
	</head>
	<body onload= "ajax();">
		<div id= "container">
			<div id= "chat_box">
				<div id= "chat"></div>
			</div>
			<form method= "post" action= "index.php">
				<input type= "text" name= "name" placeholder= "Enter your name" required="required"/> 
				<textarea name= "msg" placeholder= "Enter your message" required="required"></textarea> 
				<input type= "submit" id= "sendButton" name= "submit" value= "Send" />
			</form>
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$msg = $_POST['msg'];
				$sql= "INSERT INTO Chat (Name, Message) values ('$name', '$msg')";
				
				$result = $conn->query($sql);
				
				if($result){
					echo "<audio src='newmsg.wav' type= 'audio/wav' hidden= 'TRUE' autoplay= 'TRUE'> </audio>";
				}
			}
			?>
		</div>
	</body>
</html>