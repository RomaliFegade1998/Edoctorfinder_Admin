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
				<table class="table">
					<thead>
						<tr>
							<th scope="col">first_name</th>
							<th scope="col">last_name</th>
							<th scope="col">email_address</th>
							<th scope="col">gender</th>
							<th scope="col">password</th>
							<th scope="col">confirm_password</th>
							<th scope="col">delete</th>
							<th scope="col">update</th>
						</tr>
					</thead>
					<!--display this data in table-->
					<!--Loop-->
					<tbody>
						@foreach($postdata as $post)
						<tr>
							<th scope="row">{{$post->id}}</th>
							<td>{{$post->first_name}}</td>
							<td>{{$post->last_name}}</td>
							<td>{{$post->email_address}}</td>
							<td>{{$post->gender}}</td>
							<td>{{$post->password}}</td>
							<td>{{$post->confirm_password}}</td>
							<td><a href="{{route('deletePost',['id'=>$post->id])}}">Delete</a></td>
							<td><a href="{{route('updatePost',['id'=>$post->id])}}">update</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>