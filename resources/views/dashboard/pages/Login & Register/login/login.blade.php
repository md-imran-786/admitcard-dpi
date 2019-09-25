 
@extends('dash-board.master.master-auth')


@section('main-content')
<div class="main-login-page">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 custom-login">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h2 class="text-dark">Login</h2>
                <p class="text-muted">Sign In to your account</p>


                  <div class="form-group">
                    <div class="cols-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="name" id="name"  placeholder="Username"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    
                    <div class="cols-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="email" id="email"  placeholder=" Email"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="cols-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
                      </div>
                    </div>
                  </div>

             

                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary" type="button">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link" type="button">Forgot password?</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div class="login-right-side">
                  <h2 class="text-white">Sign up</h2>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

  <style type="text/css">
    .custom-login{
      margin-right: 200px !important;
     }
  </style>
   
@endsection