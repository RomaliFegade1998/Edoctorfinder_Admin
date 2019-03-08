@extends('layout.app')
@section("main-content")
    <div class="row">
        <div class="col-12">
          <label>Pat_Id : {{ $post->pat_id }}</label>
          <label>Doc_Id : {{ $post->doc_id }}</label>
          <label>Status : {{ $post->status }}</label>
          <label>Date_Time : {{ $post->date_time }}</label>
          <label>Description : {{ $post->description }}</label>
        </div>
    </div>
</div>
@endsection