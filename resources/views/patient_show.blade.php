@extends('layout.app')
@section("main-content")
<div class="row mb-2">
	<div class="col-12">
		<a href="{{route('patientAddForm')}}" class="btn btn-primary mb-2">Add Patient</a>
	</div>
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">pat_name</th>
							<th scope="col">pat_age</th>
							<th scope="col">pat_gender</th>
							<th scope="col">pat_email_id</th>
							<th scope="col">pat_password</th>
							<th scope="col">pat_contact_no</th>
							<th scope="col">pat_address</th>
							<th scope="col">pat_image</th>
							<th scope="col">delete</th>
							<th scope="col">update</th>
							<th scope="col">view</th>
							<form class="navbar-form" role="search" method="GET">
									<div class="input-group">
										<input type="text" name="title" class="form-control" placeholder="Search" value="{{$searchkey}}">
										<div class="input-group-btn">
											<button class="btn btn-primary" type="submit">Search</button>			
										</div>								
									</div>
							</form>
						</tr>
					</thead>
					<!--display this data in table-->
					<!--Loop-->
					<tbody>
						@foreach($postdata as $post)
						<tr>
							<th scope="row">{{$post->id}}</th>
							<td>{{$post->pat_name}}</td>
							<td>{{$post->pat_age}}</td>
							<td>{{$post->pat_gender}}</td>
							<td>{{$post->pat_email_id}}</td>
							<td>{{$post->pat_password}}</td>
							<td>{{$post->pat_contact_no}}</td>
							<td>{{$post->pat_address}}</td>
							<td>{{$post->pat_image}}</td>
							<td><a href="{{route('patientdeletePost',['id'=>$post->id])}}">Delete</a></td>
							<td><a href="{{route('patientupdatePost',['id'=>$post->id])}}">update</a></td>
							<td><a href="{{route('patientviewPost',['id'=>$post->id])}}">view</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
@endsection