@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('specialitysaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_id</label>
						<select name="doc_id">
							<option value="1">Mr.Mehta</option>
							<option value="2">Mr.Goinka</option>
							<option value="3">Mr.Maheshwari</option>
						</select>				
					</div>
					<div class="form-group">
						<label for="">spec_name_id</label>
						<input type="text" name="spec_name" class="form-control" value="{{$post->spec_name}}"/>
					</div>
				</div>
			    </div>
		</form>	
		<div class="row">
		<div class="col-12">
			<button type="submit" class=" btn btn-primary">Save</button>
		</div>
	    </div>
		</form>
	</div>
	</div>	
@endsection