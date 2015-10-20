<?php 
if(isset($_POST['submit'])) {
	/*echo "<pre>";
	print_r($_FILES['file_upload']);
	echo "</pre>";*/

	//виж стойностите от видеото
	$upload_errors = array(
		1 => 2,
		2 => 3,
		4 => 4);

//moving uploaded files from the temp location


	$temp_name = $_FILES['file_upload']['tmp_name'];
	$the_file = $_FILES['file_upload']['name'];
	$directiry = "uploads";

	if(move_uploaded_file($temp_name, $directiry. "/" . $the_file)) {

		$the_message = "File uploaded successfuly";

	} else {

		$the_error = $_FILES['file_upload']['error'];
		$the_message = $upload_errors[$the_error];

	} 
} else {
	echo "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="upload.php" enctype="multipart/form-data" method="post">
		<h2>
			<?php if(!empty($upload_errors)) {
				echo $the_message;
			}
			?>
		</h2>
		<input type="file" name="file_upload"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>