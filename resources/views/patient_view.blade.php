@extends('layout.app')
@section("main-content")
    <div class="row">
        <div class="col-12">
          <label>Pat_Name : {{ $post->pat_name }}</label>
          <label>Pat_Age : {{ $post->pat_age }}</label>
          <label>Pat_Gender : {{ $post->pat_gender }}</label>
          <label>Pat_Email_Id : {{ $post->pat_email_id }}</label>
          <label>Pat_Password : {{ $post->pat_password }}</label>
          <label>Pat_Contact_No : {{ $post->pat_contact_no }}</label>
          <label>Pat_Address : {{ $post->pat_address }}</label>
          <label>Pat_Image : {{ $post->pat_image }}</label>
        </div>
    </div>
@endsection
