@extends('page.common')

@section('page.title')
admin
@stop

@section('contentsTitle')
	WELCOME {{$username}}
@stop


@section('contents')
	<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registershow.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> -->
                                <select name = "role" id="role" class="form-control" required>
                                  <option value=""> Please Select</option>
                                  <option value="admin">Admin</option>
                                  <option value="subadmin">Sub Admin</option>
                                  <option value="guest">Guest</option>
                                </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

												<!-- ip -->
												<div class="form-group{{ $errors->has('ip') ? ' has-error' : '' }}">
														<label for="ip" class="col-md-4 control-label">IP</label>

														<div class="col-md-6">
																<input id="ip" type="text" class="form-control" name="ip" required>
														</div>
												</div>

												<!-- phone -->
												<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
														<label for="phone" class="col-md-4 control-label">Phone</label>

														<div class="col-md-6">
																<input id="phone" type="number" class="form-control" name="phone" required>
														</div>
												</div>

												<!-- status -->
												<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
														<label for="status" class="col-md-4 control-label">Status</label>
														<div class="col-md-6">
															<select name = "status" id="status" class="form-control" required>
																<option value=""> Please Select</option>
																<option value="1">Active</option>
																<option value="0">Deactive</option>
															</select>
														</div>
												</div>

												<!-- Image -->
												<div class="form-group">
														<label for="pic" class="col-md-4 control-label">Image</label>
														<div class="col-md-6">
														<input type="file" name="pic"  id="pic" class="form-control" required>

														</div>
												</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
										<!-- <br>
										@if($errors->any())
											@foreach($errors->all() as $err)
												<p>{{$err}}</p>
											@endforeach
										@endif -->
                </div>
@endsection
