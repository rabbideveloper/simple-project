@extends('layouts.master')

@section('pageTitle','Task Create')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Task Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Task Create</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Task Create</h4>
                    </div>
                    <div class="card-body">

{{--                        @if($errors)--}}
{{--                            <ul class="alert alert-danger">--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                    <li>{{$error}}</li>--}}
{{--                            @endforeach--}}
{{--                            </ul>--}}
{{--                        @endif--}}
                        <form action="{{route('task.store')}}" method="post">
                            @csrf
                            <label for="" class="w-100">
                                Title
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </label>
                            <label for="" class="w-100 mt-3">
                                Description
                                <textarea name="description" id="" class="form-control" placeholder="Enter Description"></textarea>
                            </label>
                            <label for="" class="w-100 mt-3">
                                Select Status
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </label>
                            <label for="" class="w-100 mt-3">
                                Select Deadline
                                <input type="date" name="deadline" id="" class="form-control" placeholder="Select Deadline">
                            </label>
                            <label for="" class="w-100 mt-3">
                                Select User
                                <select name="user_id" id="" class="form-control">
                                    @foreach($users as $id=> $user)
                                        <option value="{{$id}}">{{$user}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-success mt-3">Create New Task</button>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
