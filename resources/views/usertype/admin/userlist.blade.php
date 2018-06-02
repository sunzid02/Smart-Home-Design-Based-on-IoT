@extends('page.common')

@section('page.title')
admin
@stop

@section('contentsTitle')
@stop


@section('contents')


  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-user"></i> User List</div>

    <div class="card-body">
      <div class="table-responsive">
          <form>
            {{ csrf_field() }}
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

                <tr>
                  <th>USER ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created On</th>
                  <th>Role</th>
                  <th>IP</th>
                  <th>Phone</th>
                  <th>Option</th>
                </tr>

              <!-- <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created On</th>
                  <th>Updated On</th>
                </tr>
              </tfoot> -->
              <tbody>
                @foreach ($allUsers as $au)
                  <tr>
                  @if($au['role'] == "admin")
                  <td> {{ $au['id'] }} </td>
                  <td> {{ $au['name'] }} </td>
                  <td> {{ $au['email'] }} </td>
                  <td> {{ $au['created_at'] }} </td>
                  <td> {{ $au['role'] }} </td>
                  <td> {{ $au['ip'] }} </td>
                  <td> {{ $au['phone'] }} </td>
                  <td>
                    <a href="{{route('registershow.edit', $au->id)}}" class="btn btn-default">Edit</a>
                  </td>
                  @else
                  <td> {{ $au['id'] }} </td>
                  <td> {{ $au['name'] }} </td>
                  <td> {{ $au['email'] }} </td>
                  <td> {{ $au['created_at'] }} </td>
                  <td> {{ $au['role'] }} </td>
                  <td> {{ $au['ip'] }} </td>
                  <td> {{ $au['phone'] }} </td>
                  <td>
                    @if($au['status'] == 1)
                    <a href="{{route('registershow.edit', $au->id)}}" class="btn btn-default">Edit</a>
                    <a href="{{route('registershow.deactivateUser', $au->id)}}" class="btn btn-danger">Deactivate</a>
                    @else
                    <a href="{{route('registershow.edit', $au->id)}}" class="btn btn-default">Edit</a>
                    <a href="{{route('registershow.activateUser', $au->id)}}" class="btn btn-info">Activate</a>
                    @endif
                  </td>
                  @endif
                  </tr>
                @endforeach


                @if(Session::has('activate'))
                <label>
                  {{ Session::get('activate') }}
                </label>
              @endif

                @if(Session::has('deactivate'))
                <label>
                  {{ Session::get('deactivate') }}
                </label>
              @endif


              </tbody>
            </table>
        </form>
      </div>
      <div class="">

      </div>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>
  </div>


@endsection
