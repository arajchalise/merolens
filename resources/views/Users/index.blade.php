@include('Includes.adminHeader')
  @if(Auth::user()->role_id != 3)
  <table class="table">
    <h1 style="text-align: center; margin-bottom: 30px;">Our users</h1>
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
    @if($user->role->name == "Unverified")
        <tr style="background-color: red; color: #fff;">
    @endif
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name}}</td>
      <td>{{ $user->contact_no }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->role->name }}</td>
      @if(Auth::user()->role_id == 1)<td><a href="#" class="btn btn-danger">Delete</a>
        @if($user->role->name == "Unverified") <a href="/verifyUser/{{ $user->id }}" class="btn btn-primary">Verify</a> @endif 
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
 @else
    <div style="min-height: 300px; text-align: center;"><p style="color: red; font-weight: bold;">You are not authorized</p></div>
  @endif
 @include('Includes.footer')
