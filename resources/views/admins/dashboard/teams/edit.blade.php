@extends('admins.dashboard.master')

@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">edit Employee</h5>
            </div>
            <div class="card-body">

                <form class="form-control" action="{{ route('teams.update', $team->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="{{ $team->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="">Job title</label>
                                <input type="text" class="form-control" placeholder="Name" name="job_title"
                                    value="{{ $team->job_title }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-3">
                            <div class="form-group">
                                <label for="">Upload Image <button class="btn btn-primary">attche</button></label>
                                <input type="file" class="form-control" placeholder="File" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea"
                                    name="description">{{ $team->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
