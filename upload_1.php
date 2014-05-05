<html>
	<head>
		<title>Upload image to mysql database.</title>
		<style type="text/css">
			img{
				margin: .2em;
				border: 1px solid #555;
				padding: .2em;
				vertical-align: top;
			}
		</style>
	</head>
	<body>
		<?php if (!empty($uploadOk)): ?>
			<div>
		  		<h3>Image Uploaded:</h3>
		  	</div>
			<div>
				<img src="image.php?id=<?=$imageId ?>" width="150px">
				<strong>Embed</strong>: <input size="25" value='<img src="image.php?id=<?=$imageId ?>">'>
			</div>

			<hr>
		<? endif; ?>

		<form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
		  <div>
		  	<h3>Image Upload:</h3>
		  </div>
		  <div>
		  	<label>Image</label>
		  	<input type="hidden" name="MAX_FILE_SIZE" value="500000">
			<input type="file" name="image" />
		    <input name="submit" type="submit" value="Upload">
		  </div>
		</form>
	</body>
</html>