@if(session('success'))
  <div class="alert alert-success">
      <p>Usesr added successfully</p>
  </div>
  @endif
@if(session('delete'))
  <div class="alert alert-success">
      <p>Usesr Deleted successfully</p>
  </div>
  @endif
  @if(session('registerSuccess'))
     <div class="alert alert-success">
         <p>User Login Successfully</p>
     </div>
  @endif