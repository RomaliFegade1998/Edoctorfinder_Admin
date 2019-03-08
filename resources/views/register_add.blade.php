<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('saveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">first_name</label>
						<input type="text" name="first_name" value="" class="form-control"/>		
					</div>
					<div class="form-group">
						<label for="">last_name</label>
						<input type="text" name="last_name" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">email_address</label>
						<input type="text" name="email_address" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">gender</label>
						<input type="text" name="gender" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">password</label>
						<input type="text" name="password" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">confirm_password</label>
						<input type="text" name="confirm_password" value="" class="form-control"/>
					</div>
				</div>
				</div>
			<div class="row">
				<div class="col-12">
					<button type="submit" class="btn btn-primary">Add data</button>
				</div>
			</div>
		</form>
	</div>	
	</div>
	</div>
</body>
</html>