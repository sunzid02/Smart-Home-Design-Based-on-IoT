<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Sorry Picture not matched</h2>
	<!-- <a href="{{($pic)}}"> Pic </a> -->
	 <!-- <img src="{{asset($pic)}}" height="30px" width="30px">
	 <a href="{{asset($pic)}}">Download</a> -->
	 <form method="post" action="{{ route('save.index') }}" enctype="multipart/form-data">
		{{csrf_field()}}
		Choose File: <input type="file" name="pic" value = {{$pic}}>
		<br/><br/>
		<input type="submit" value="Upload">
	</form>
	<!-- {{$pic}} -->
</body>
</html>