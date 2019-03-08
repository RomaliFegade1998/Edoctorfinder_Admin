@extends('layout.app')
@section("main-content")   
    <div class="row">
        <div class="col-12">
          <label>Doc Id : {{ $post->doc_id }}</label>
          <label>Spec_Name : {{ $post->spec_name }}</label>
        </div>
    </div>
@endsection
