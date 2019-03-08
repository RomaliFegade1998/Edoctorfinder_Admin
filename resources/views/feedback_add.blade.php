@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('feedbacksaveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">patient_name</label>
						<select name="pat_id" class="form-control" id="doc_name">
							<option value="" disabled="" selected="">select pat_name</option>
								@foreach($patient as $p)
							<option value="{{$p->id}}">{{$p->pat_name}}</option>
								@endforeach
						</select>	
					</div>
					<div class="form-group">
						<label for="">comment</label>
						<input type="text" name="comment" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">status</label>	
						<input type="text" name="status" value="" class="form-control"/>
					</div>
				</div>
				</div>	
	<div class="row">
		<div class="col-12">
			<button type="submit" class="btn btn-primary">Add data</button>
		</div>
		</form>
	</div>	
	</div>
	</div>
	
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZx1twRo8QtmKMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('#patient').change(function(e){
			console.log("change",e.target.value);
			$get('/getpatient?id='+e.target.value,function(res){
				console.log(res);
				$("#patient").html("");
				for(var i=0; i<res.data.length; i++){
					let element = res.data[i];
					$("#patient").append("<option value='"+element.id+"'>"+element.?Name+"</option>");
				}
			})
		})
	</script>

@endsection