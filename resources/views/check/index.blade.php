<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart Home</title>




  <style media="screen">
  body {
    background-image:  url("uploads/login2.jpg");

    background-repeat: no-repeat;
     background-size: 100% auto;
     background-position: auto;
     width: 100%;
     height: 100%;
  }

  </style>


    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="{{URL::asset('startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pagesa/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row"></div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-default" style="margin-top:20%">

                  <div class="panel-heading">
                      <h3 class="panel-title">Login to enter</h3>
                  </div>
                  <div class="panel-body" id="tr">
                    <form class="form-horizontal" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">IP Address</label>

                            <div class="col-md-6">
                                <input id="ip" type="text" class="form-control" name="ip" required>

                                <!-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                <!-- @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>

                                <!-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-sm btn-success btn-block">
                                    Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <div class="form-group">
                        <a href="{{route('file.index')}}" class="btn btn-md btn-success btn-block">Back</a>




            </div>

          </div>

        </div>
    </div>


    <!-- jQuery -->
    <script src="{{URL::asset('/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/dist/js/sb-admin-2.js')}}"></script>
  </body>

  </html>
