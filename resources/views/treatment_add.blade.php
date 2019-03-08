@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('treatmentsaveData')}}" method="post">
			{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_name</label>	
						<select name="doc_name" class="form-control" id="doc_id">
							<option value="" disabled="" selected="">select doc_name</option>
								@foreach($treatment as $t)
							<option value="{{$t->id}}">{{$t->id}}</option>
								@endforeach
						</select>	
						
					</div>
					<div class="form-group">
						<label for="">appointment</label>
						<select name="app_id" class="form-control" id="doc_id">
							<option value="" disabled="" selected="">select appointment</option>
								@foreach($treatment as $t)
							<option value="{{$t->id}}">{{$t->id}}</option>
								@endforeach
						</select>	
							</div>
					<div class="form-group">
						<label for="">date_time</label>	
						<input type="text" name="date_time" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">treatment</label>	
						<input type="text" name="treatment" value="" class="form-control"/>
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
		$('#treatment').change(function(e){
			console.log("change",e.target.value);
			$get('/gettreatment?id='+e.target.value,function(res){
				console.log(res);
				$("#treatment").html("");
				for(var i=0; i<res.data.length; i++){
					let element = res.data[i];
					$("#treatment").append("<option value='"+element.id+"'>"+element.?Name+"</option>");
				}
			})
		})
	</script>

@endsection