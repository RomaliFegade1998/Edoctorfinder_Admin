@extends('layout.app')
@section("main-content")
	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('specialitysaveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_education</label>
						<select name="doc_id" class="form-control" id="doc_name">
							<option value="" disabled="" selected="">select doc_education</option>
								@foreach($doctor as $d)
							<option value="{{$d->id}}">{{$d->doc_education}}</option>
								@endforeach
						</select>	
					</div>
					<div class="form-group">
						<label for="">spec_name</label>
						<input type="text" name="spec_name" value="" class="form-control"/>		
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
		$('#doctor').change(function(e){
			console.log("change",e.target.value);
			$get('/getstate?id='+e.target.value,function(res){
				console.log(res);
				$("#doctor").html("");
				for(var i=0; i<res.data.length; i++){
					let element = res.data[i];
					$("#doctor").append("<option value='"+element.id+"'>"+element.?Name+"</option>");
				}
			})
		})
	</script>
@endsection