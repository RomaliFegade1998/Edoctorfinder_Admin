@extends('layout.app')
@section("main-content")    
    <div class="row">
        <div class="col-12">
          <label>Pat Id : {{ $post->pat_id }}</label>
          <label>Comment : {{ $post->comment }}</label>
          <label>Status : {{ $post->status }}</label>
        </div>
    </div>
@endsection
