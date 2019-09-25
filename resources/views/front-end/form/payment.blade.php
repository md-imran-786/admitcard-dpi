@extends('front-end.master.master')
@section('main-content')
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">

      @extends('front-end.layout.partial.common-header')

      <div class="col-lg-10 mt-3">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> Payment Details
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="roll"><b>Roll:</b> 78455</label>
                  
                </div>
              </div>

              <div class="form-group col-sm-6">
                <!-- <label for="department">Department</label> -->
               <div class="form-group">
                  <label for="roll"><b>Department:</b> Computer</label>
                  
                </div>
              </div>
            </div>
            <!--/.row-->
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="semester"><b>Semester:</b> 1st</label>
                </div>
              </div>

              <div class="form-group col-sm-6">
               
               <label for="session"><b>Session:</b> 2014-15</label>
              </div>
            </div>
            <table class="table table-responsive-sm table-bordered">
              <thead>
                <tr>
                  
                  <th>1st Semester</th>
                  <th>2nd Semester</th>
                  <th>3rd Semester</th>
                  <th>4th Semester</th>
                  <th>5th Semester</th>
                  <th>6th Semester</th>
                  <th>7th Semester</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td><span class="badge badge-primary">Paid</span></td>
                  <td><span class="badge badge-danger">Unpaid</span></td>
                  <td><span class="badge badge-primary">Paid</span></td>
                  <td><span class="badge badge-danger">Unpaid</span></td>
                  <td><span class="badge badge-primary">Paid</span></td>
                  <td><span class="badge badge-danger">Unpaid</span></td>
                  <td><span class="badge badge-primary">Paid</span></td>
                </tr>
               
              </tbody>
            </table>

            <h4><b>Message:</b> Sorry Please Contact with Accounts office </h4>

            <span class="input-group-append">
              <button type="button" class="btn btn-primary">Download Admit Card</button>
            </span>
                   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection