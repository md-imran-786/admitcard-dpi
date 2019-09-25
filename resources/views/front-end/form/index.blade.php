@extends('front-end.master.master')

@section('main-content')
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      @extends('front-end.layout.partial.common-header')

      <div class="col-sm-10">
        <ul class="nav nav-pills float-right">
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link btn-primary" href="#">Payment Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-primary" href="#">Download Admit Card</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-10">
        <div class="card">


          <div class="card-header">
            <strong>Admit Card</strong>
            
          </div>
          <div class="card-body">


            
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <!-- <label for="roll">Roll</label> -->
                  <input type="text" class="form-control" id="roll" placeholder="Enter Roll">
                </div>
              </div>

               <div class="form-group col-sm-6">
                <!-- <label for="department">Department</label> -->
                <select class="form-control" id="department">
                  <option value="" selected="" disabled="">Select Your Deparment</option>
                  <option value="computer">Computer</option>
                  <option value="aitd">Architecture & Interior Design</option>
                  <option value="civil">Civil</option>
                  <option value="electrical">Electrical</option>
                  <option value="textile">Textile</option>
                  <option value="telecom">Telecomunication</option>
                  <option value="gdpm">GDPM</option>
                </select>
              </div>
            </div>
            <!--/.row-->
            <div class="row">
             

              <div class="col-sm-6">
                <div class="form-group">
                 <!-- <label for="semester">Semester</label> -->
                <select class="form-control" id="semester">
                  <option value="" selected="" disabled="">Select Your Semester</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                  <option value="5th">5th</option>
                  <option value="6th">6th</option>
                  <option value="7th">7th</option>
                </select>
                </div>
              </div>

              <div class="form-group col-sm-6">
                <!-- <label for="session">Session</label> -->
                <select class="form-control" id="session">
                  <option value="" selected="" disabled="">Select Your Session</option>
                  <option value="2010">2010-11</option>
                  <option value="2011">2011-12</option>
                  <option value="2012">2012-13</option>
                  <option value="2013">2013-14</option>
                  <option value="2014">2014-15</option>
                  <option value="2015">2015-16</option>
                  <option value="2016">2016-17</option>
                  <option value="2017">2017-18</option>
                  <option value="2018">2018-19</option>
                  <option value="2019">2019-20</option>
                </select>
              </div>
            </div>

            <!--/.row-->
            <span class="input-group-append">
              <button type="button" class="btn btn-primary">Submit</button>
            </span>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endsection