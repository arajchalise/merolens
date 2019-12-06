@include('Includes.adminHeader')
  <table class="table">
    <h1 style="text-align: center; margin-bottom: 30px;">Our Clients</h1>
  <thead>
    <tr>
      <th scope="col">Client ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact No</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
    <tr>
      <th scope="row">{{ $client->id }}</th>
      <td>{{ $client->name}}</td>
      <td>{{ $client->address }}</td>
      <td>{{ $client->contact_no }}</td>
      <td>{{ $client->email }}</td>
      <td> <a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
  @include('Includes.footer')
