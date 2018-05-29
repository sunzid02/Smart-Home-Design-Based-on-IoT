@extends('page.subAdmin.common')

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
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created On</th>
                  <th>Updated On</th>
                  <th>Role</th>
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
                    <td> {{ $au['id'] }} </td>
                    <td> {{ $au['name'] }} </td>
                    <td> {{ $au['email'] }} </td>
                    <td> {{ $au['created_at'] }} </td>
                    <td> {{ $au['updated_at'] }} </td>
                    <td> {{ $au['role'] }} </td>
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


@endsection
