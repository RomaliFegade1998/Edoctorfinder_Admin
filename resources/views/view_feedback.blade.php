@extends('layout.app')
@section("main-content")
	<div class="row">
		<div class="col-12">
      <label>Pat Id : {{ $feedbacks->pat_id }}</label>
      <label>Admin Id : {{ $feedbacks->admin_id }}</label>
      <label>Comments : {{ $feedbacks->comment }}</label>
      <label>Status : {{ $feedbacks->status }}</label>
		</div>
	</div>
@endsection
