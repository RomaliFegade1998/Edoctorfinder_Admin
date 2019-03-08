@extends('layout.app')
@section("main-content")
<div class="row mb-2">
	<div class="col-12">
		<a href="{{route('stateAddForm')}}" class="btn btn-primary mb-2">Add State</a>
	</div>
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">state_name</th>
							<th scope="col">delete</th>
							<th scope="col">update</th>
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
							<td>{{$post->state_name}}</td>
							<td><a href="{{route('statedeletePost',['id'=>$post->id])}}">Delete</a></td>
							<td><a href="{{route('stateupdatePost',['id'=>$post->id])}}">update</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
@endsection