@if ($message = Session::get('success'))
   <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
         <button class="close" data-dismissible="alert">
            <span>x</span>
         </button>
         <p>{{ $message }}</p>
      </div>
   </div>
@endif
