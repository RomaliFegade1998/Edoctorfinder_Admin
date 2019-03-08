@extends('layout.app')
@section("main-content")    
    <div class="row">
        <div class="col-12">
          <label>Doc Id : {{ $post->doc_id }}</label>
          <label>App Id : {{ $post->app_id }}</label>
          <label>Treatment : {{ $post->Treatment }}</label>
          <label>Date_Time : {{ $post->date_time }}</label>
        </div>
    </div>
@endsection
