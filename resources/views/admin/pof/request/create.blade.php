@extends('layouts.app')

@section('content')
<div class="row">
   <div class="alert alert-warning alert-message" role="alert"><i class="fa fa-info"></i>&nbsp;&nbsp;</div>
</div>

<div class="row">
   @include('layouts.mrf-sidebar')
   <div class="col-lg-9">
      <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Requests</div>

         <div class="panel-body">
            <form class="form-horizontal">
               <div class="form-group">
                  <label for="" class="control-label col-lg-2">Project:</label>
                  <div class="col-lg-7">
                     <select type="text" class="form-control">
                        <option selected>-- Select a Project --</option>
                     </select>
                  </div>
               </div>

               <div class="form-group">
                  <label for="" class="control-label col-lg-2">Date:</label>
                  <div class="col-lg-7">
                     <label class="control-label">{{ date('F d, Y') }}</label>
                  </div>
               </div>

               <div class="form-group">
                  <label for="" class="control-label col-lg-2">M.R. Control #:</label>
                  <div class="col-lg-7">
                     <label class="control-label">0123456789 <i>(Sample M.R Control Number)</i></label>
                  </div>
               </div>

               <div class="form-group">
                  <label for="dateInput" class="control-label col-lg-2">Date Needed:</label>
                  <div class="col-lg-7">
                     <div class="input-group date">
                        <input class="form-control" name="date_needed" id="dateInput">
                        <span class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </span>
                     </div>
                  </div>
               </div>

               <hr>

               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <th>Item #</th>
                        <th>Item & Description</th>
                        <th>Qty.</th>
                        <th>Unit</th>
                        <th>Remarks</th>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Test Item & Description</td>
                           <td>3</td>
                           <td>Test Unity</td>
                           <td>Test Remarks</td>
                        </tr>
                     </tbody>
                  </table>
               </div>

               <hr>

               <a class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp; Process</a>
               <button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add More Item</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
