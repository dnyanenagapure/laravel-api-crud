<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Project</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
	<div class="container">
	<center><h2>All Users Data</h2></center>
    @if (!empty($users))
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">State ID</th>
      <th scope="col">City ID</th>
      <th scope="col">Taluka</th>
      <th scope="col">Pincode</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($users as $data)
    <tr>
      <td>{{ $data['name'] }}</td>
      <td>{{ $data['stateId'] }}</td>
      <td>{{ $data['cityId'] }}</td>
      <td>{{ $data['taluka'] }}</td>
      <td>{{ $data['pincode'] }}</td>
      <td><a href="/update/{{ $data['id'] }}">Update</a> &nbsp; <a href="/delete/{{ $data['id'] }}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
       @endif 
   
       

  </body>
</html>
		
		