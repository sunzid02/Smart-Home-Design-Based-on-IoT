<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('.file-upload').file_upload();
	    });
	</script>


<style media="screen">
body {
	background-image:  url("uploads/oo.png");

	background-repeat: no-repeat;
	 background-size: 100% auto;
	 background-position: auto;
	 width: 100%;
	 height: 100%;
}
</style>
</head>
<body>
<div class="container" style="">
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	  <div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h2 style="color:white">Face Recognize</h2>
				<br><br>
				<fieldset >
			    <div class="form-group">
						<label class="file-upload btn btn-primary">
							Choose File: <input type="file" name="pic" class="form-control" required>
						</label>

			    </div>
					<input type="submit" class="btn btn-primary" value="Upload">

			    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
			  </fieldset>
			</div>
	  </div>
	</form>
</div>


</body>
</html>
