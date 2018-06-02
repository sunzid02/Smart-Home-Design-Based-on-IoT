
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
      <i class="fa fa-user"></i> For {{$uid->name}}</div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form method="post">
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$uid->id}}">

              <table>
                <tr>
                  <td>ID: </td>
                  <td></td>
                  <td>{{$uid->id}} </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td>Name: </td>
                  <td></td>
                  <td><input type="text" name="name" value="{{$uid->name}} " class="form-control"></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td>Email: </td>
                  <td></td>
                  <td><input type="email" name="email" value="{{$uid->email}}" class="form-control"></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td>Role: </td>
                  <td></td>
                  <td>
                    <select name = "role" id="role" class="form-control" required>
                      <option value=""> Please Select</option>
                      <option value="admin">Admin</option>
                      <option value="subadmin">Sub Admin</option>
                      <option value="guest">Guest</option>
                    </select>
                  </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td>IP: </td>
                  <td></td>
                  <td><input type="text" name="ip" value="{{$uid->ip}}" class="form-control"></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td>Phone: </td>
                  <td></td>
                  <td><input type="text" name="phone" value="{{$uid->phone}}" class="form-control"></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td>Status: </td>
                  <td></td>
                  <td>
                    <select name = "status" id="status" class="form-control" required >
                      <option value=""> Please Select</option>
                      <option value="1">Activate</option>
                      <option value="0">Deactivate</option>
                    </select>
                  </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" value="Update" class="btn btn-success">
                  </td>
                  <td>
                    <a href="{{route('registershow.showAllUsers')}}" class="btn btn-primary">Back</a>
                  </td>
                </tr>

              </table>

            </form>
            <br>


          </div>
          <div class="col-md-4"></div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>
  </div>


@endsection
