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
		<form class="" action="{{route('doctorsaveData')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="">doc_name</label>
						<input type="text" name="doc_name" value="" class="form-control"/>		
					</div>
					<div class="form-group">
						<label for="">doc_education</label>
						<input type="text" name="doc_education" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">doc_address</label>
						<input type="text" name="doc_address" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">doc_contact_no</label>
						<input type="text" name="doc_contact_no" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">doc_email_id</label>
						<input type="text" name="doc_email_id" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">doc_password</label>
						<input type="text" name="doc_password" value="" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="">doc_image</label>
						<input type='file' onchange="readURL(this);" name="file"/>
						<img id="blah" alt="your image" width="200px" />
					</div>
				</div>
				</div>

			<div class="row">
				<div class="col-12">
					<button type="submit" name="submit" class="btn btn-primary">Add data</button>
					
				</div>
			</div>
		</form>
		
	</div>	
	</div>
@endsection