@include('Includes.adminHeader')
 @if(Auth::user()->role_id != 3) 
  <div class="container" id="main" style="min-height: 200px;">
      <div>
      </div>
  </div>
  @else
    <div style="min-height: 300px; text-align: center;"><p style="color: red; font-weight: bold;">You are not authorized</p></div>
  @endif
  @include('Includes.footer')
