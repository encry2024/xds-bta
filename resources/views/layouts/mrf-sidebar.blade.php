<div class="col-lg-3">
   <div class="list-group">
      <a href="{{ route('home') }}" class="list-group-item {{ Request::route()->getName() == 'home' ? 'active' : '' }}">
         <i class="fa fa-home"></i>&nbsp;&nbsp;Home
      </a>
      <a href="{{ route('project.index') }}" class="list-group-item {{ Request::is('exodus/material_requisition_form/project*') ? 'active' : '' }}"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Projects</a>
      <a href="{{ route('requests.index') }}" class="list-group-item {{ Request::is('exodus/material_requisition_form/requests*') ? 'active' : '' }}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Requests</a>
      <a href="{{ route('balances.index') }}" class="list-group-item {{ Request::is('exodus/material_requisition_form/balance*') ? 'active' : '' }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Balance</a>
   </div>
</div>
