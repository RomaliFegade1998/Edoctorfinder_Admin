@extends('layout.app')
@section("main-content")	
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('schedulesaveupdatedpost')}}" method="post">
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
						<label for="">date_time</label>
						<input type="text" name="date_time" class="form-control" value="{{$post->date_time}}"/>
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