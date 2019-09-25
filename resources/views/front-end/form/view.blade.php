@extends('front-end.master.master')
@section('main-content')
<div class="container-fluid">
          <div class="animated fadeIn">
           


            <div class="row">
              <div class="col-lg-12">
                <div class="">
                  <div class="card-body">
                    <div class="logo_img" style="background:url(/dashboard/img/DPI-logo.png);background-repeat: no-repeat; background-position:center;">
                      <div class="transparentbox">
                      

                        <div class="col-md-10 pt-5">
                          <div class="row">
                            <div class="col-md-3">
                              <img style="width: 100%;" src="{!! asset('dashboard/img/DPI-logo.png') !!}">
                            </div>

                            <div class="col-md-7">
                              <h2> <i style="font-family: serif;font-weight: bold;font-size: 33px;">‘ Midterm Examniation 2019 ’</i></h2>
                              <p style="font-size: 20px;font-family: sans-serif;"><b>Program:</b> 4 Year's Diploma in Engineering (15)</p>
                            </div>
                            <p style="font-family: sans-serif;font-size: 20px;margin-left: 3%;" ><b>Center Name & Code No: Daffodil Polytechnic Institute (50238)</b></p>
                          </div>
                        </div>

                        <div class="row" style="">
                          <div class="col-md-8">
                            <table class="table-responsive-sm table-sm" style="margin-left: 3%;">
                          
                              <tbody style="font-size: 20px;font-family: sans-serif;">
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
                                  <td>: 66712, 65911, 65912, 65711, 65712</td>
                                </tr>
                               
                              </tbody>
                            </table>
                          </div>

                          <div class="col-md-4">
                             <table class="table-responsive-sm table-sm" style="">
                          
                              <tbody style="font-size: 20px;font-family: sans-serif;">
                                <tr>
                                  <th>Roll:</th>
                                  <td>24857</td>
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
                      
                        <div class="footer_area  pb-5">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="incharge" style="margin-left: 3%;">
                                <br><br>
                                <p></p>
                                <p style="font-size: 18px">.........................................................<br>
                                 Examination In charge <br>
                                 Daffodil Polytechnic Institute
                                 </p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="principal" style="margin-left: 30%;">
                                <br><br>
                                <p></p>
                                <p  style="font-size: 18px">.........................................................<br>
                                 Principal <br>
                                 Daffodil Polytechnic Institute
                                 </p>
                              </div>
                            </div>
                          </div>
                        </div>
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


        <div class="row no-print">
            <div class="col-xs-12">
                <button class="btn btn-success pull-right" onclick="printTabulation();">P r i n t </button>
            </div>
        </div>
        

<style type="text/css">
  .main{
    margin-left: 0px !important;
  }
  div.logo_img

  {



  /*background:url(/dashboard/img/DPI-logo.png);*/
/*
  background-repeat:no-repeat;

  background-position:center;*/

 

  }

div.transparentbox

  {

 
  background-color:#ffffff;

  /*border:1px solid;*/

  border-color:#CD853F;

  opacity:0.9;

  filter:alpha(opacity=60);

  }
@media print
{
    * {-webkit-print-color-adjust:exact;}
}

</style>

<script type="text/javascript">
    function printTabulation(){
      window.print();
    }
 </script>


@endsection