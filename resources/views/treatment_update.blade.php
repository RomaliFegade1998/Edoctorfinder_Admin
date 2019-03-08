@extends('layout.app')
@section("main-content")

	<div class="row">
		<div class="col-12">
		<form class="" action="{{route('treatmentsaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_id</label>
						<input type="text" name="doc_id" class="form-control" value="{{$post->doc_id}}" />
					</div>
					<div class="form-group">
						<label for="">app_id</label>
						<input type="text" name="app_id" class="form-control" value="{{$post->app_id}}"/>
					</div>
					<div class="form-group">
						<label for="">date_time</label>
						<input type="text" name="date_time" class="form-control" value="{{$post->date_time}}"/>
					</div>					
					<div class="form-group">
						<label for="">treatment</label>
						<input type="text" name="treatment" class="form-control" value="{{$post->treatment}}"/>
					</div>
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
@endsection	