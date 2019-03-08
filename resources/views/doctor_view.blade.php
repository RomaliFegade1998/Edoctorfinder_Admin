@extends('layout.app')
@section("main-content")
    <div class="row">
        <div class="col-12">
          <label>Doc_Name : {{ $post->doc_name }}</label>
          <label>Doc_Education : {{ $post->doc_education }}</label>
          <label>Doc_Address : {{ $post->doc_address }}</label>
          <label>Doc_Contact_No : {{ $post->doc_contact_no }}</label>
          <label>Doc_Email_Id : {{ $post->doc_email_id }}</label>
          <label>Doc_Password : {{ $post->doc_password }}</label>
          <label>Doc_Image : {{ $post->doc_image }}</label>
        </div>
    </div>
@endsection
