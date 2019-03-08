@extends('layout.app')
@section("main-content")
<div class="row">
  <div class="col-12">
    <a href="{{route('feedbackAddForm')}}" class="btn btn-primary mb-2">Add Feedback</a>
  </div>
</div>

	<div class="row">
		<div class="col-12">
			<table class="table">
				<thread>
    <tr>
      <th scope="col">id</th>
      <th scope="col">pat_id</th>
      <th scope="col">admin_id</th>
      <th scope="col">comment</th>
      <th scope="col">status</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">View</th>
      <form class="navbar-form" role="search" method="GET">
                  <div class="input-group">
                    <input type="text" name="title" class="form-control" placeholder="Search" value="{{$searchkey}}">
                    <div class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>     
                    </div>                
                  </div>
              </form>
    </tr>
  </thread>
  <!--display this data in table-->
  <!--loop-->

  	<tbody>
  		@foreach($feedbacks as $feedback)
  		<tr>
  			<th scope="row">{{$feedback->id}}</th>
  			<td>{{$feedback->pat_id}}</td>
  			<td>{{$feedback->admin_id}}</td>
        <td>{{$feedback->comment}}</td>
        <td>{{$feedback->status}}</td>
        <td><a href="{{route('update_feedback',['id'=>$feedback->id])}}">Update</a></td>
        <td><a href="{{route('delete_feedback',['id'=>$feedback->id])}}">Delete</a></td>
        <td><a href="{{route('view_feedback',['id'=>$feedback->id])}}">View</a></td> 
  		</tr>
  		@endforeach
  	</tbody>
			</table>
		</div>
	</div>
	
</div>
@endsection