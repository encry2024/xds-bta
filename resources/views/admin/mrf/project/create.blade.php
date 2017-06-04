@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-lg-12">
      <a href="{{ route('project.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back to List</a>
   </div>
</div>

<br>

<div class="row">
   @include('layouts.mrf-sidebar')
   <div class="col-lg-9">
      <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-upload"></i>&nbsp;&nbsp;Upload Project</div>
      </div>

      <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<i>CSV, and XLSX file types only.</i></div>

      <div class="panel panel-default">
         <div class="panel-body">
            <form action="{{ route('project.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
               {{ csrf_field() }}

               <div class="form-group">
                  <label for="name" class="control-label col-lg-2">Project Name:</label>
                  <div class="col-lg-8">
                     <input type="text" name="name" id="name" class="form-control">
                  </div>
               </div>

               <div class="form-group">
                  <label for="subject" class="control-label col-lg-2">Subject:</label>
                  <div class="col-lg-8">
                     <input type="text" name="subject" id="subject" class="form-control">
                  </div>
               </div>

               <div class="form-group">
                  <label for="location" class="control-label col-lg-2">Location:</label>
                  <div class="col-lg-8">
                     <input type="text" name="location" id="location" class="form-control">
                  </div>
               </div>

               <div class="form-group">
                  <label for="date" class="control-label col-lg-2">Date:</label>
                  <div class="col-lg-8">
                     <input type="text" name="date" id="date" class="form-control" readonly="true" value="{{ date('Y-m-d') }}">
                  </div>
               </div>

               <div class="form-group">
                  <label for="project" class="control-label col-lg-2">Project File:</label>
                  <div class="col-lg-8">
                     <input type="file" name="project" id="project" class="form-control" style="line-height: 0;">
                  </div>
               </div>

               <button class="btn btn-success pull-right" type="submit"><i class="fa fa-upload"></i> Upload</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
