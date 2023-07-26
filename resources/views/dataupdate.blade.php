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
    
	<div class="container">
	<center><h2>Update Form</h2></center><br/>
    @if (!empty($user))
	<form method="post" action="/update/{{$user->id;}}">
	@csrf
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="form-group">

      <input type="text" name="name" class="form-control" value="{{ $user->name;}}"><br/>
<input type="text" class="form-control" name="taluka" value="{{ $user->taluka;}}"><br/>
<input type="text" class="form-control" name="pincode" value="{{ $user->pincode;}}">
<br/>

<input type="submit" value="update" class="btn btn-primary">

</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	  </form>
      @endif
	</div>
  </body>
</html>
		
		