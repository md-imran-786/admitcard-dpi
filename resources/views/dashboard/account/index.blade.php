@extends('dashboard.master.master')

@section('main-content')
<div class="container-fluid">
   <div class="animated fadeIn">
	   <div class="row">
	      <div class="col-lg-12">
		      <div class="card">
		         <div class="card-header">
   	            <i class="fa fa-align-justify"></i> Bootstrap Breadcrumb
   	            <div class="card-header-actions">
   	              <a href="http://coreui.io/docs/components/bootstrap-breadcrumb/" class="card-header-action" target="_blank">
   	                 <small class="text-muted">docs</small>
   	              </a>
               	</div>
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
                  <span class="input-group-append mb-5">
                     <button type="button" class="btn btn-primary">Submit</button>
                  </span>

                  <table id="example" class="display table table-striped table-hover table-condensed" style="width:100%">
                     <thead>
                        <tr>
                           <th>Student Roll</th>
                           <th>Department</th>
                           <th>Semester</th>
                           <th>Status Account</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>45824</td>
                           <td>computer</td>
                           <td>1st</td>
                           <td>
                              <label class="switch switch-label switch-pill switch-danger">
                               <input type="checkbox" class="switch-input" checked>
                               <span class="switch-slider" data-checked="Unpaid" data-unchecked="Paid"></span>
                             </label>
                             &nbsp;&nbsp;&nbsp;

                           </td>
                           

                        </tr>
                        <tr>
                           <td>45824</td>
                           <td>Civil</td>
                           <td>2nd</td>
                           <td>
                              <label class="switch switch-label switch-pill switch-danger">
                               <input type="checkbox" class="switch-input" checked>
                               <span class="switch-slider" data-checked="Unpaid" data-unchecked="Paid"></span>
                             </label>
                             &nbsp;&nbsp;&nbsp;

                           </td>
                        </tr>
                        <tr>
                           <td>45824</td>
                           <td>AIDT</td>
                           <td>3rd</td>
                           <td>
                              <label class="switch switch-label switch-pill switch-danger">
                               <input type="checkbox" class="switch-input" checked>
                               <span class="switch-slider" data-checked="Unpaid" data-unchecked="Paid"></span>
                             </label>
                             &nbsp;&nbsp;&nbsp;

                           </td>
                        </tr>
                        
                     </tbody>
                     
                  </table>
	            </div>
		      </div>
	      </div>
	  </div>
  </div>
</div>

<style type="text/css">
   .switch-danger .switch-input:checked + .switch-slider::before{
      margin-left: 22px;
   }
   .switch-label{
      width: 72px;
   }
   .switch-success .switch-input:checked + .switch-slider::before{
      margin-left: 22px;
   }

   .switch-label .switch-slider::after{
      width: 62% !important;
   }
   .switch-label .switch-slider::after{
      color: #000000 !important;
   }
   .switch-slider{
      /*background-color: #F86C6B !important;*/
      border: none;
   }

   
</style>

<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable( {
        // "scrollY": 400,
        "scrollX": true
    } );
} );



</script>



@endsection