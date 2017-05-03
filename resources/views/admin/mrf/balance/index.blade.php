@extends('layouts.app')

@section('content')
<div class="row">
   <div class="alert alert-info alert-message" role="alert"><i class="fa fa-info"></i>&nbsp;&nbsp;This page requires the "Project List" data to complete the functionality of this page...</div>
</div>

<div class="row">
   @include('layouts.mrf-sidebar')
   <div class="col-lg-9">
      <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Balances</div>

         <div class="panel-body">
            <form class="form-horizontal">

               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <th>Item #</th>
                        <th>Project</th>
                        <th>Unit</th>
                        <th>Ordered Qty.</th>
                        <th>Balance</th>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Test Item & Description</td>
                           <td>3</td>
                           <td>5</td>
                           <td>Test Balance</td>
                        </tr>
                     </tbody>
                  </table>
               </div>

            </form>
         </div>
      </div>
   </div>
</div>
@endsection
