@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('citysaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">state_id</label>
						<select name="state_id">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">city_name</label>
						<input type="text" name="city_name" value="" class="form-control"/>
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