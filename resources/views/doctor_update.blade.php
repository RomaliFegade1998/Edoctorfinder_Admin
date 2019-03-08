@extends('layout.app')
@section("main-content")
<style></style>
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
		<form class="" action="{{route('doctorsaveupdatedpost')}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$post->id}}">
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_name</label>
						<input type="text" name="doc_name" class="form-control" value="{{$post->doc_name}}"/>	
					</div>
					<div class="form-group">
						<label for="">doc_education</label>
						<input type="text" name="doc_education" class="form-control" value="{{$post->doc_education}}"/>
					</div>
					<div class="form-group">
						<label for="">doc_address</label>
						<input type="text" name="doc_address" class="form-control" value="{{$post->doc_address}}"/>
					</div>
					<div class="form-group">
						<label for="">doc_contact_no</label>
						<input type="text" name="doc_contact_no" class="form-control" value="{{$post->doc_contact_no}}"/>
					</div>
					<div class="form-group">
						<label for="">doc_email_id</label>
						<input type="text" name="doc_email_id" class="form-control" value="{{$post->doc_email_id}}"/>
					</div>
					<div class="form-group">
						<label for="">doc_password</label>
						<input type="text" name="doc_password" class="form-control" value="{{$post->doc_password}}"/>
					</div>
					<div class="form-group">
						<label for="">doc_image</label>
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