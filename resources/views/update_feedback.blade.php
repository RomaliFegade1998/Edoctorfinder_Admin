@extends('layout.app')
@section("main-content")       
    <form class="" action="{{route('save_feedback')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="fed_id" value="{{ $feedbacks->id }}">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>pat_id</label>
                            <select name="pat_id" class="form-control">
                                <option value="1" @if($feedbacks->pat_id == 1) selected="selected" @endif>1</option>
                                <option value="2" @if($feedbacks->pat_id == 2) selected="selected" @endif>2</option>
                                <option value="3" @if($feedbacks->pat_id == 3) selected="selected" @endif>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>admin_id</label>
                            <select name="admin_id" class="form-control">
                                <option value="1" @if($feedbacks->admin_id == 1) selected="selected" @endif>101</option>
                                <option value="2" @if($feedbacks->admin_id == 2) selected="selected" @endif>102</option>
                                <option value="3" @if($feedbacks->admin_id == 3) selected="selected" @endif>103</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>comment</label>
                            <input type="text" name="comment" class="form-control" value="{{ $feedbacks->comment }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>status</label>
                            <input type="text" name="status" class="form-control" value="{{ $feedbacks->status }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save Feedback</button>
                    </div>
                </div>
            </form>
@endsection