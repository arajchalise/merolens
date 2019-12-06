@include('Includes.adminHeader')
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
      <td><a href="#" class="btn btn-danger">Delete</a>
        @if($user->role->name == "Unverified") <a href="/verifyUser/{{ $user->id }}" class="btn btn-primary">Verify</a> @endif 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
 @include('Includes.footer')
