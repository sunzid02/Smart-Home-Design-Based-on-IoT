
@extends('page.subAdmin.common')

@section('page.title')
Device
@stop

@section('contentsTitle')
 <i class="fa fa-caret-square-o-right fa-lg"> Devices</i>
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
                      @if($au->status == 1)
                      <a href="{{route('room.subAdminDeviceOff', $au->id)}}" class="btn btn-danger">OFF</a>
                      @else
                      <a href="{{route('room.subAdminDeviceOn', $au->id)}}" class="btn btn-primary">ON</a>
                      @endif
                    </td>
									</tr>
								@endforeach


          @if(Session::has('on'))
          <label>
            {{ Session::get('on') }}
          </label>
        @endif

          @if(Session::has('off'))
          <label>
            {{ Session::get('off') }}
          </label>
        @endif
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
