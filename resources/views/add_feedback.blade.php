@extends('layout.app')
@section("main-content")
        <div class="container">
            <form class="" action="{{route('save_feedback')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>pat_id</label>
                            <select name="pat_id" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>admin_id</label>
                            <select name="admin_id" class="form-control">
                                <option value="1">101</option>
                                <option value="2">102</option>
                                <option value="3">103</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>comment</label>
                            <input type="text" name="comment" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>status</label>
                            <input type="text" name="status" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add Feedback</button>
                    </div>
                </div>
            </form>
        </div>
@endsection