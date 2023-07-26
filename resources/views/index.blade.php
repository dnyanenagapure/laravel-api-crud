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
	<center><h2>Registration Form</h2></center>
	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	<a href="/users">Show Data</a>
	@endif
	<form method="post" action="{{ route('registration.submit') }}">
	@csrf
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="form-group">

      <input type="text" class="form-control" name="first_name" placeholder="First name"><br/>
      <input type="text" class="form-control" name="last_name" placeholder="Last name"><br/>

<select id="state" name="state" class="form-control" >
<option value="">Select State</option>
	@foreach($state as $list)
		<option value="{{$list->id}}">{{$list->state}}</option>
	@endforeach
</select>
<br/>

<select id="city" name="city" class="form-control" >
	<option value="">Select District</option>
</select><br/>

<select id="taluka" name="taluka" class="form-control" >
	<option value="">Select Taluka</option>
</select><br/>

<input type="text" class="form-control" name="pin_code" placeholder="Pin Code"><br/>
<input type="submit" class="btn btn-primary">

</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	  </form>
	</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

		<script>
		jQuery(document).ready(function(){
			
		jQuery('#state').change(function(){
				let sid=jQuery(this).val();
				jQuery.ajax({
					url:'/getCity',
					type:'post',
					data:'sid='+sid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#city').html(result)
					}
				});
			});

			jQuery('#city').change(function(){
				let cid=jQuery(this).val();
				jQuery.ajax({
					url:'/getTaluka',
					type:'post',
					data:'cid='+cid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#taluka').html(result)
					}
				});
			});
			
		});
			
		</script>
  </body>
</html>
		
		