@extends('layouts.app')

@section('content')
<div class="row">
   @include('layouts.pof-sidebar')
   <div class="col-lg-9">
      <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</div>
      </div>

      <div class="panel panel-default">
         <div class="panel-body">
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <th>Project</th>
                     <th>MR Control Number</th>
                     <th>Date Requested</th>
                     <th>Date Needed</th>
                     <th>Status</th>
                     <th>Action</th>
                  </thead>

                  <tbody>
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
