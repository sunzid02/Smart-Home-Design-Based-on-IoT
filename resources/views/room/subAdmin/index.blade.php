
@extends('page.subAdmin.common')

@section('page.title')
Device
@stop

@section('contentsTitle')
 <i class="fa fa-caret-square-o-right fa-lg"> Devices for users</i>
@stop


@section('contents')
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
		<div class="card-body">
			<div class="table-responsive">
					<form>
						{{ csrf_field() }}
						<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0" align="center" >

								<tr>
									<th>ID</th>
									<th>Device Name</th>
									<th>Toggle Switch</th>
								</tr>
							<tbody>
								@foreach ($device as $au)
									<tr>
										<td> {{ $au->id }} </td>
										<td> {{ $au->device }} </td>
										<td>
											<label class="switch" >
												<input type="checkbox" checked  id="dev">
												<span class="slider round"></span>
											</label>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
				</form>
			</div>
			<div class="">

			</div>
		</div>
	</div>
	</div>
@stop

@section('footer')
<script type="text/javascript">
	$('#dev').change(function() {
		var a = $("#dev").val();
		alert(a);
	});
</script>
@endsection


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
