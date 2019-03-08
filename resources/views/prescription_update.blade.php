@extends('layout.app')
@section("main-content")

<div class="row">
	<div class="col-12">
		<form class="" action="{{route('prescriptionsaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">pat_id</label>
						<select name="pat_id">
							<option value="1">Sahil</option>
							<option value="2">Tushar</option>
							<option value="3">Rohit</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">doc_id</label>
						<select name="doc_id">
							<option value="1">Mr.Mehta</option>
							<option value="2">Mr.Goinka</option>
							<option value="3">Mr.Maheshwari</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">tre_id</label>
						<input type="text" name="tre_id" class="form-control" value="{{$post->tre_id}}"/>
					</div>
					<div class="form-group">
						<label for="">medicine</label>
						<input type="text" name="medicine" class="form-control" value="{{$post->date_time}}"/>
					</div>	
					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" rows="8" cols="80" class="form-control"></textarea>
					</div>				
				</div>

				<div class="row">
					<div class="col-12">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
		</form>
	</div>	
</div>
@endsection