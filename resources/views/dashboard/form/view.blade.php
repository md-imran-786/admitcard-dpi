@extends('front-end.master.master')
@section('main-content')
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <!-- <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Simple Table
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Date registered</th>
                          <th>Role</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Samppa Nori</td>
                          <td>2012/01/01</td>
                          <td>Member</td>
                          <td>
                            <span class="badge badge-success">Active</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Estavan Lykos</td>
                          <td>2012/02/01</td>
                          <td>Staff</td>
                          <td>
                            <span class="badge badge-danger">Banned</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Chetan Mohamed</td>
                          <td>2012/02/01</td>
                          <td>Admin</td>
                          <td>
                            <span class="badge badge-secondary">Inactive</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Derick Maximinus</td>
                          <td>2012/03/01</td>
                          <td>Member</td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                        </tr>
                        <tr>
                          <td>Friderik Dávid</td>
                          <td>2012/01/21</td>
                          <td>Staff</td>
                          <td>
                            <span class="badge badge-success">Active</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">4</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> -->
              <!--/.col-->

            </div>
            <!--/.row-->


            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Combined All Table
                  </div>
                  <div class="card-body">

                    <div class="col-md-10 pt-5">
                      <div class="row">
                        <div class="col-md-3">
                          <img style="width: 100%;" src="{!! asset('dashboard/img/DPI-logo.png') !!}">
                        </div>

                        <div class="col-md-7">
                          <h2>‘ Midterm Examniation 2019 ’</h2>
                          <p><b>Program:</b> 4 Year's Diploma in Engineering (15)</p>
                        </div>
                        <p><b>Center Name & Code No: Daffodil Polytechnic Institute (50238)</b></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <table class="table-responsive-sm table-sm">
                      
                          <tbody>
                            <tr>
                              <th>Name of Examinee</th>
                              <td>: MD.Mehedi Hasan</td>
                            </tr>
                            <tr>
                              <th>Technology</th>
                              <td>: Computer</td>
                            </tr>
                            <tr>
                              <th>Suject Code</th>
                              <th>: 66712 65911 65912<br>65711 65712</th>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>

                      <div class="col-md-4">
                         <table class="table-responsive-sm table-sm">
                      
                          <tbody>
                            <tr>
                              <th>Roll:</th>
                              <td>MD.Mehedi Hasan</td>
                            </tr>
                            <tr>
                              <th>Reg. No:</th>
                              <td></td>
                            </tr>
                            <tr>
                              <th>Session: </th>
                              <td>2018-19</td>
                            </tr>
                             <tr>
                              <th>Semester: </th>
                              <td>1st</td>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>

        </div>

        
        @endsection