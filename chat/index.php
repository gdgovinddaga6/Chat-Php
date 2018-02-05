<?php
include 'database.php'; 
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>chat system</title>
	<link rel="stylesheet" href="style.css" media="all"/>
	<script>
			function ajax(){
				
			
			var req  = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;
				}	
				}
			req.open('GET','chat.php',true);
			req.send();
			
			}
			setInterval(function(){ajax()},1000);
	</script>
	<style> 
#myDIV {
    width: 1920x;
    height: 1080px;
    background: red;
    -webkit-animation: mymove 5s infinite; 
    animation: mymove 5s infinite;
}


@-webkit-keyframes mymove {
    from {background-color: red;}
    to {background-color: blue;}
}


@keyframes mymove {
    from {background-color: red;}
    to {background-color: blue;}
}
</style>
</head>

<body onload="ajax();">

<div id ="container">
	<div id="chat_box">
	<div id="chat"></div>
	<div id="myDIV"></div>
	
	
	</div>
			<form method ="post" action = "index.php">
			
				<input type="text" name="name" placeholder="Enter name">
				<textarea name ="msg" placeholder="Enter any message"></textarea>
				<input type="submit" name="submit" value ="SEND">
			</form>



			<?php
			
			/*$name = mysqli_real_escape_string($con, $_REQUEST['name']);
			$msg = mysqli_real_escape_string($con, $_REQUEST['msg']);

			$sql = "INSERT INTO chat (name,msg) VALUES ('name', 'msg')";*/
			
			
			
			
			
			
			
			
			
				if(isset($_POST ['submit'])) 
				{
					$name = $_POST['name'];
					$msg = $_POST['msg'];
					$query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";
					
					$run = $con->query($query);
					
						if($run) {
					
						echo "<embed loop ='false' src = 'chat.wav' hidden ='true' autoplay ='true'/>";
					}
					}
			 
			?>
</div>
</body>
</html>