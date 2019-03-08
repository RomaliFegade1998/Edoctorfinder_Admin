@extends('layout.app')
@section("main-content")
<style>
</style>
					<script>
						function readURL(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();

							reader.onload = function (e) {
							$('#blah')
							.attr('src',e.target.result);
							};
								reader.readAsDataURL(input.files[0]);
							}
						}
					</script>

	<div class="row">
	<div class="col-12">
		<form class="" action="{{route('patientsaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">pat_name</label>
						<input type="text" name="pat_name" class="form-control" value="{{$post->pat_name}}"/>	
					</div>
					<div class="form-group">
						<label for="">pat_age</label>
						<input type="text" name="pat_age" class="form-control" value="{{$post->pat_age}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_gender</label>
						<input type="text" name="pat_gender" class="form-control" value="{{$post->pat_gender}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_email_id</label>
						<input type="text" name="pat_email_id" class="form-control" value="{{$post->pat_email_id}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_password</label>
						<input type="text" name="pat_password" class="form-control" value="{{$post->pat_password}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_contact_no</label>
						<input type="text" name="pat_contact_no" class="form-control" value="{{$post->pat_contact_no}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_address</label>
						<input type="text" name="pat_address" class="form-control" value="{{$post->pat_address}}"/>
					</div>
					<div class="form-group">
						<label for="">pat_image</label>
						<input type='file' onchange="readURL(this);" name="file"/>
						<img id="blah" alt="your image" width="200px" />
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