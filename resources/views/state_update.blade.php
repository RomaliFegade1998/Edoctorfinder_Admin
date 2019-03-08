@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('statesaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">state_name</label>
						<input type="text" name="state_name" class="form-control" value="{{$post->state_name}}"/>
					</div>
					</div>
			    </div>
			</div>	
		<div class="row">
		<div class="col-12">
			<button type="submit" class=" btn btn-primary">Save</button>
		</div>
	    </div>
		</form>
	</div>	
	</div>
@endsection
