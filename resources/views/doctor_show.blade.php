@extends('layout.app')
@section("main-content")
<div class="row mb-2">
	<div class="col-12">
		<a href="{{route('doctorAddForm')}}" class="btn btn-primary mb-2">Add Doctor</a>
	</div>
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">doc_name</th>
							<th scope="col">doc_education</th>
							<th scope="col">doc_address</th>
							<th scope="col">doc_contact_no</th>
							<th scope="col">doc_email_id</th>
							<th scope="col">doc_password</th>
							<th scope="col">doc_image</th>
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
							<td>{{$post->doc_name}}</td>
							<td>{{$post->doc_education}}</td>
							<td>{{$post->doc_address}}</td>
							<td>{{$post->doc_contact_no}}</td>
							<td>{{$post->doc_email_id}}</td>
							<td>{{$post->doc_password}}</td>
							<td>{{$post->doc_image}}</td>
							<td><a href="{{route('doctordeletePost',['id'=>$post->id])}}">Delete</a></td>
							<td><a href="{{route('doctorupdatePost',['id'=>$post->id])}}">update</a></td>
							<td><a href="{{route('doctorviewPost',['id'=>$post->id])}}">view</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
</div>
@endsection