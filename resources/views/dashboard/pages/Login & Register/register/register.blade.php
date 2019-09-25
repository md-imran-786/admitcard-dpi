 
@extends('dash-board.master.master-auth')
@section('main-content')

<div class="register-area">
 <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-6 custom-register">
          <div class="card mx-4">
            <div class="card-body p-4">
              <h1>Register</h1>
              <p class="text-muted">Create your account</p>
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
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Email"/>
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


              <div class="form-group">
                <div class="cols-sm-10">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="repat_password" id="repat_password"  placeholder="Repeat Password"/>
                  </div>
                </div>
              </div>

              
              <button class="btn btn-block btn-success" type="button">Create Account</button>
            </div>
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-block btn-facebook" type="button">
                    <span>facebook</span>
                  </button>
                </div>
                <div class="col-6">
                  <button class="btn btn-block btn-twitter" type="button">
                    <span>twitter</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <style type="text/css">
    .custom-register{
      margin-right: 200px !important;
     }
    </style>
@endsection