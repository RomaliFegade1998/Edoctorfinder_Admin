@extends('layout.app')
@section("main-content")
    <div class="row">
        <div class="col-12">
          <label>Pat Id : {{ $post->pat_id }}</label>
          <label>Doc Id : {{ $post->doc_id }}</label>
          <label>Tre Id : {{ $post->tre_id }}</label>
          <label>Medicine : {{ $post->medicine }}</label>
          <label>Description : {{ $post->description }}</label>
        </div>
    </div>
@endsection
