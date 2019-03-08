@extends('layout.app')
@section("main-content")
	<div class="row">
		<div class="col-12">
			<form class="" action="{{route('prescriptionsaveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
					<div class="col-12">
					<div class="form-group">
						<label for="">pat_id</label>
						<select name="pat_id" class="form-control" id="pat_id">
							<option value="" disabled="" selected="">select pat_name</option>
								@foreach($prescription as $p)
							<option value="{{$p->id}}">{{$p->id}}</option>
								@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">doc_id</label>
						<select name="doc_id" class="form-control" id="doc_id">
							<option value="" disabled="" selected="">select doc_name</option>
								@foreach($prescription as $p)
							<option value="{{$p->id}}">{{$p->id}}</option>
								@endforeach
						</select>
					<div class="form-group">
						<label for="">tre_id</label>
						<select name="tre_id" class="form-control" id="tre_id">
							<option value="" disabled="" selected="">select treatment</option>
								@foreach($prescription as $p)
							<option value="{{$p->id}}">{{$p->id}}</option>
								@endforeach
						</select>
	
					</div>
					<div class="form-group">
						<label for="">medicine</label>	
						<input type="text" name="medicine" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" rows="8" cols="80" class="form-control"></textarea>
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
		$('#prescription').change(function(e){
			console.log("change",e.target.value);
			$get('/getprescription?id='+e.target.value,function(res){
				console.log(res);
				$("#prescription").html("");
				for(var i=0; i<res.data.length; i++){
					let element = res.data[i];
					$("#prescription").append("<option value='"+element.id+"'>"+element.?Name+"</option>");
				}
			})
		})
	</script>
@endsection