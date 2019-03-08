@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('citysaveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">state_id</label>
						<select name="state_id" class="form-control" id="state_name">
							<option value="" disabled="" selected="">select state_name</option>
								@foreach($state as $s)
							<option value="{{$s->id}}">{{$s->state_name}}</option>
								@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">city_name</label>
						<input type="text" name="city_name" value="" class="form-control"/>
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

	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZx1twRo8QtmKMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('#state').change(function(e){
			console.log("change",e.target.value);
			$get('/getstate?id='+e.target.value,function(res){
				console.log(res);
				$("#state").html("");
				for(var i=0; i<res.data.length; i++){
					let element = res.data[i];
					$("#state").append("<option value='"+element.id+"'>"+element.?Name+"</option>");
				}
			})
		})
	</script>
@endsection