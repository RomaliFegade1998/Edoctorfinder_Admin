@extends('layout.app')
@section("main-content")
<div class="row mb-2">
	<div class="col-12">
		<a href="{{route('specialityAddForm')}}" class="btn btn-primary mb-2">Add Speciality</a>
	</div>		
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							
							<th scope="col">spec_name</th>
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
							
							<td>{{$post->spec_name}}</td>
							<td><a href="{{route('specialitydeletePost',['id'=>$post->id])}}">Delete</a></td>
							<td><a href="{{route('specialityupdatePost',['id'=>$post->id])}}">update</a></td>
							<td><a href="{{route('specialityviewPost',['id'=>$post->id])}}">view</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
</div>
@endsection