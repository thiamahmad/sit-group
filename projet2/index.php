<html>
	<body>
		<form action="" method="POST">
			<input type="text" name="nom"/>
			<select>
				<option>Tension 1</option>
				<option>Tension 2</option>
				<option>Tension 3</option>
				<option>Tension 4</option>
			</select>
			<input type="submit" value="Valider" name="valider"/>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['valider'])){
		echo $_POST['nom'];
	}
?>