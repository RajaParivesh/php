<?php 
if (isset($_POST['user_input'])&&!empty($_POST['user_input'])){
	echo $user_input = $_POST['user_input'];
}
 ?>
 <hr>
<form action="textArea.php" method="POST">
		<textarea cols="40" rows="8" name="user_input" ></textarea>
		<input type="submit" value="Submit"/>
	
</form>
