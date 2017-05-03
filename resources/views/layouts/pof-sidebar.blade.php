<div class="col-lg-3">
   <div class="list-group">
      <a href="{{ route('home') }}" class="list-group-item {{ Request::is('exodus/' . Auth::user()->form_type . '/home') ? 'active' : '' }}">
         <i class="fa fa-home"></i>&nbsp;&nbsp;Home
      </a>
      <a href="#" class="list-group-item">
         <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Requests</a>
      <a href="#" class="list-group-item">
         <i class="fa fa-file-o" aria-hidden="true"></i>&nbsp;&nbsp;Create Purchase Order</a>
      <a href="#" class="list-group-item">
         <i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;Monitoring</a>
      <a href="#" class="list-group-item">
         <i class="fa fa-qrcode" aria-hidden="true"></i>&nbsp;&nbsp;Materials</a>
      <a href="#" class="list-group-item">
         <i class="fa fa-truck" aria-hidden="true"></i>&nbsp;&nbsp;Suppliers</a>
      <a href="#" class="list-group-item">
         <i class="fa fa-file-o" aria-hidden="true"></i>&nbsp;&nbsp;R.F.Q</a>
   </div>
</div>
