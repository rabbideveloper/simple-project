@extends('layouts.master')

@section('pageTitle','Task List')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Task List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Task List</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Task List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                    <th>Assigned User</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 1
                                @endphp
                                @foreach ($tasks as $task)
                                <tr>
                                    <td> {{$sl++}} </td>
                                    <td> {{$task->title}} </td>
                                    <td>{{substr($task->description,0,20)}}</td>
                                    <td>{{$task->status}}</td>
                                    <td>{{$task->deadline != null ? \Carbon\Carbon::create($task->deadline)->format('d-m-Y'):null }}</td>
                                    <td>{{$task->user_id}}</td>
                                    <td>{{$task->created_at->toDayDateTimeString()}}</td>
                                    <td>{{$task->updated_at->toDayDateTimeString()}}</td>
                                    <td>Action</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
