@extends('layouts.app')

@section('content')
<div class="row">
   <div class="alert alert-info alert-message" role="alert"><i class="fa fa-info"></i>&nbsp;&nbsp;This page requires the "Project List" data to complete the functionality of this page...</div>
</div>

<div class="row">
   @include('layouts.mrf-sidebar')
   <div class="col-lg-9">
      <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Projects</div>

         <div class="panel-body">
         </div>
      </div>
   </div>
</div>
@endsection
