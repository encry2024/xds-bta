@extends('layouts.app')

@section('content')
<div class="row">
   @include('layouts.mrf-sidebar')
   <div class="col-lg-9">
      <div class="row">
         <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Projects</div>
         </div>
      </div>

      <div class="row">
         <a href="{{ route('project.create') }}" class="btn btn-primary"><i class="fa fa-upload"></i> Upload Project List</a>
      </div>

      <br>

      <div class="row">
         <div class="panel panel-default">
            <div class="panel-body">
               <table class="table striped">
                  <thead>
                     <th>ID</th>
                     <th>Project</th>
                     <th>Category</th>
                     <th>Sub Category</th>
                     <th>Item Type</th>
                     <th>Description</th>
                     <th>Item</th>
                     <th>Quantity</th>
                     <th>Unit</th>
                     <th>Price</th>
                     <th>Date Added</th>
                     <th>Last Updated</th>
                  </thead>
                  <tbody>
                     @foreach($items as $item)
                     <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->project->name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->item_type }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->item }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ date('Y-m-d', strtotime($item->created_at)) }}</td>
                        <td>{{ date('Y-m-d', strtotime($item->updated_at)) }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
