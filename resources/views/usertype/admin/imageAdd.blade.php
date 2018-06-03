
@extends('page.common')

@section('page.title')
admin
@stop

@section('contentsTitle')
@stop


@section('contents')


<div class="container" style="">
	<form method="post" action="{{route('save.index')}}" enctype="multipart/form-data">
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

@endsection
