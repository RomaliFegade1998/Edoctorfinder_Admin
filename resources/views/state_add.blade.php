@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('statesaveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">state_name</label>
						<input type="text" name="state_name" value="" class="form-control"/>		
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
@endsection