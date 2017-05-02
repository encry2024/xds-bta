<div class="col-lg-3">
   <div class="list-group">
      <a href="{{ route('home') }}" class="list-group-item {{ Request::route()->getName() == 'home' ? 'active' : '' }}">
         <i class="fa fa-home"></i>&nbsp;&nbsp;Home
      </a>
      <a href="{{ route('projects.index') }}" class="list-group-item {{ Request::is('exodus/material_requisition_tool/projects*') ? 'active' : '' }}"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Projects</a>
      <a href="{{ route('requests.index') }}" class="list-group-item {{ Request::is('exodus/material_requisition_tool/requests*') ? 'active' : '' }}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Requests</a>
      <a href="#" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Balance</a>
   </div>
</div>
