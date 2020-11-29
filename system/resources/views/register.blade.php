<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('public')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('public')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:#f2c9c9;">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
              <img src="{{ url('public')}}/img/wdw.jpg" style="width: 500px; height:670px; " alt="" class="">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action"{{url('register')}}" class="user" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputUsername"  placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name=" email">
                    </div>
                  <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputnama"  placeholder="nama" name="nama">
                    </div>    
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>   
                    <div class="form-group">
                     <input type="submit" class="form-control btn btn-primary btn-user btn-block" value=" Register ">
                  </div>               
                      <hr>
                <a href="#" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="#" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="#">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{ url('login')}}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('public')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url('public')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('public')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('public')}}/js/sb-admin-2.min.js"></script>

</body>

</html>
