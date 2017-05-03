@extends('layouts.app')

@section('content')
<div class="row">
   @include('layouts.pof-sidebar')
   <div class="col-lg-9">
      <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</div>

         <div class="panel-body">
            You are logged in!
         </div>
      </div>
   </div>
</div>
@endsection
