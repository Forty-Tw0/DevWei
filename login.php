<html><body>
<div class="row">
	<?php if($_GET['res'] == 1) echo "Incorrect login<br>"; ?>
	<form action="login_submit.php" method="POST">
		<div>
			<input name="username" id="username" type="text">
			<label for="username">Username</label>
		</div>
		<div>
			<input name="password" id="password" type="password">
			<label for="password">Password</label>
		</div>
		<div>
			<button type="submit" value="Submit">Submit</button>
		</div>
	</form>
</div>
</body></html>
